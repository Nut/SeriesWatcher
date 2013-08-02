<?php 
class TVDB {
	
	private $DirFilter = array('.', '..', '.DS_Store', '.xml');
	
	/*Suchfunktion*/
	
	public function SearchSeries($SearchValue) {
		$SearchURL = 'http://thetvdb.com/api/GetSeries.php?seriesname='.htmlspecialchars(urlencode($SearchValue)).'&language=de';
		$xml = simplexml_load_file($SearchURL);
		foreach($xml->Series as $Series) {
			echo '	<tr>
						<td>' . htmlentities($Series->SeriesName) . '</td>
						<td><input type="radio" name="chkSeries" value="'.htmlentities($Series->seriesid).'"></td>
					</tr>';
		}
	}
	
	/*	
		Die gesuchte Serie wird gedownloaded
	*/
	
	public function DownloadSeries() {
		if($_POST['save']) {
			if(isset($_POST['chkSeries'])) {
				$Value = $_POST['chkSeries'];
				if(!in_array($Value.'.xml', $this->CheckExist())) {
					$GetContent = file_get_contents('http://thetvdb.com/api/'.API_TVDB.'/series/'.$Value.'/all/de.xml');
					file_put_contents(DIR_SERIES.$Value.'.xml', $GetContent);
				}
			} else { 
				echo 'Bitte Serie auswählen!';
			}
		}
	}
	
	private function CheckExist() {
		if($Handle = opendir(DIR_SERIES)) {
			while (false !== ($File = readdir($Handle))) {
				$Files[] = $File;
			}	
		}
		return array_diff($Files, $this->DirFilter);
	}
	
	/*Listet alle Seasons und Episoden der gewählten XML*/
	
	public function ListSeries() {
		$xml = simplexml_load_file(DIR_SERIES.'de2.xml');
		foreach($xml->Episode as $Episode) {
			if($Episode->SeasonNumber > 0) {
				echo '	<tr>
							<td>' . $Episode->SeasonNumber . '</td>
							<td>' . $Episode->EpisodeNumber . '</td>
							<td>' . htmlentities($Episode->EpisodeName) . '</td>
						</tr>';
			}
		}
	}
	
	/*Generiert den JSON-String für MySQL-Datenbank*/
	
	public function MakeJSON() {
		$xml = simplexml_load_file(DIR_SERIES.'de2.xml');
		foreach($xml->Episode as $Episode) {
			if($Episode->SeasonNumber > 0) {
				$String .= '"S'.$Episode->SeasonNumber.'E'.$Episode->EpisodeNumber.'": false, ';
				$StringCut = substr($String, 0, -2);
			}
		}
		return '{"Series": {"Name": "'.$xml->Series->SeriesName.'", "Data": {'.$StringCut.'}}}';
	}
	
	/*Listet die Episoden, welche man gesehen hat*/
	
	public function ListAll() {
		$MySQLi = new mysqli(MYSQL_HOST, MYSQL_USERNAME, MYSQL_PASSWORD, MYSQL_DATABASE);
		$Result = $MySQLi->query("SELECT * FROM test");
		$Row = $Result->fetch_row();
		
		$DecodeXML = json_decode($Row[1], true);
		
		for ($i = 0; $i < sizeof($DecodeXML["Series"]["Data"]); $i++) {
			$check = (current($DecodeXML["Series"]["Data"]) == true) ? ' checked' : '';
			echo '	<tr>
						<td>' . key($DecodeXML["Series"]["Data"]) . '</td> 
						<td><input name="check[]" type="checkbox" value="'.key($DecodeXML["Series"]["Data"]).'"'.$check.'></td>
					</tr>';
			next($DecodeXML["Series"]["Data"]);
		}
	}
	
	public function SaveList() {
		$MySQLi = new mysqli(MYSQL_HOST, MYSQL_USERNAME, MYSQL_PASSWORD, MYSQL_DATABASE);
		$Result = $MySQLi->query("SELECT * FROM test");
		$Row = $Result->fetch_row();
		$DecodeArray = json_decode($Row[1], true);
		
		$Replacement = $_POST['check'];
		
		foreach($Replacement as $New) {
			if(isset($Replacement)) {
				$DecodeArray["Series"]["Data"][$New] = true;
			} else {
				$DecodeArray["Series"]["Data"] = false;	
			}
		}
		echo '<pre>';
		var_dump($DecodeArray);
		echo '</pre>';
		//$MySQLi->query("UPDATE test SET series = '".json_encode($DecodeArray)."' WHERE ID = '1'");
	}
}
?>