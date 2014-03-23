<?php 
class TVDB {
	
	private $DirFilter = array('.', '..', '.DS_Store', '.xml');
	private $AllSeriesChk, $CurrentSelect;
	
	/*Suchfunktion*/
	
	public function SearchSeries($SearchValue) {
		$SearchURL = 'http://thetvdb.com/api/GetSeries.php?seriesname='.htmlspecialchars(urlencode($SearchValue)).'&language=de';
		$xml = simplexml_load_file($SearchURL);
		foreach($xml->Series as $Series) {
			echo '	<tr>
						<td>' . htmlentities($Series->SeriesName) . '</td>
						<td>'.htmlentities($Series->seriesid).'</td>
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
		$xml = simplexml_load_file(DIR_SERIES.'81189.xml');
		foreach($xml->Episode as $Episode) {
			if($Episode->SeasonNumber > 0) {
				$String .= '"S'.$Episode->SeasonNumber.'E'.$Episode->EpisodeNumber.'": false, ';
				$StringCut = substr($String, 0, -2);
			}
		}
		return '{"Series": {"Name": "'.$xml->Series->SeriesName.'", "Data": {'.$StringCut.'}}}';
	}
	
	/*Zeigt die Serien, welche man gecheckt hat*/
	
	public function ShowSeries() {
		$MySQLi = new mysqli(MYSQL_HOST, MYSQL_USERNAME, MYSQL_PASSWORD, MYSQL_DATABASE);
		$Result = $MySQLi->query("SELECT series_id FROM test WHERE UserID = 1");
		
		while($Row = $Result->fetch_array(MYSQL_ASSOC)) {
			$Rows[] = $Row['series_id'];
		}

		$this->AllSeriesChk = $Rows;
		for($i = 0; $i < count($Rows); $i++) {
			echo '<a href="?page=watched&series='.urlencode($Rows[$i]).'">'.$Rows[$i]."</a> ";
		}
		$this->CreatePage();
	}
	
	public function CreatePage() {
		$this->CurrentSelect = $_GET['series'];
		for($i = 0; $i < count($this->AllSeriesChk); $i++) {
			if($this->CurrentSelect == $this->AllSeriesChk[$i]) {
				echo '<br>bla '.$this->CurrentSelect;
				$this->ListAll();
			}
		}
	}
	
	/*Listet die Episoden einer Serie, welche man gesehen hat*/
	
	public function ListAll() {
		$MySQLi = new mysqli(MYSQL_HOST, MYSQL_USERNAME, MYSQL_PASSWORD, MYSQL_DATABASE);
		$Result = $MySQLi->query("SELECT `series` FROM `test` WHERE series_id = ".$this->CurrentSelect."");
		$Row = $Result->fetch_row();
		
		$DecodeXML = json_decode($Row[0], true);
		echo '<form action="?page=watched&series='.$this->CurrentSelect.'" method="post">
				<table width="300px" border="1">';
		for($i = 0; $i < count($DecodeXML["Series"]["Data"]); $i++) {
			$check = (current($DecodeXML["Series"]["Data"]) == true) ? ' checked' : '';
			echo '	<tr>
						<td>' . key($DecodeXML["Series"]["Data"]) . '</td> 
						<td><input name="check[]" type="checkbox" value="'.key($DecodeXML["Series"]["Data"]).'"'.$check.'></td>
					</tr>';
			next($DecodeXML["Series"]["Data"]);
		}
		echo '</table>
				<input type="submit" value="Speichern" name="save">
			</form>';
		if($_POST['save']) {
			$this->SaveList();
		}
	}
	
	public function SaveList() {
		$MySQLi = new mysqli(MYSQL_HOST, MYSQL_USERNAME, MYSQL_PASSWORD, MYSQL_DATABASE);
		$Result = $MySQLi->query("SELECT `series` FROM `test` WHERE series_id = ".$this->CurrentSelect."");
		$Row = $Result->fetch_row();
		$DecodeArray = json_decode($Row[0], true);
		$Replacement = $_POST['check']; //sucht die die gecheckt wurden
		
		//Setzt alles auf false
		foreach($DecodeArray["Series"]["Data"] as $Key => $Value) { 
		  $DecodeArray["Series"]["Data"][$Key] = false; 
		} 
		
		//Setzt die gechecktet auf true
		foreach($Replacement as $New) {
			$DecodeArray["Series"]["Data"][$New] = true;
		}
		
		$MySQLi->query("UPDATE test SET series = '".json_encode($DecodeArray)."' WHERE series_id = '".$this->CurrentSelect."'");
	}
}
?>