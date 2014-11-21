<?php
class Search {

	private $dirFilter = array('.', '..', '.DS_Store', '.xml');
	
	/**
	* Suchfunktion
	* @param 	string $searchValue Suchbegriff des Users
	* @param 	int $i = 0
	* @return 	array $arr liefert alle Ergebnise
	*/
	
	public function searchSeries($searchValue, $i = 0) {
		$searchURL = 'http://thetvdb.com/api/GetSeries.php?seriesname='.htmlspecialchars(urlencode($searchValue)).'&language=de';
		$xml = simplexml_load_file($searchURL);
		
		foreach($xml->Series as $series) {
			$arr[$i]['seriesname'] = (string)$series->SeriesName;
			$arr[$i]['seriesid'] = (string)$series->seriesid;
			$arr[$i]['language'] = (string)$series->language;
			$i++;
		}

		return $arr;
	}
	
	/**
	* Die gesuchte Serie wird heruntergeladen
	* @param 	int $chkSeries ausgewählte Serien-ID 
	* @return 	array $arr liefert alle Ergebnise der Suchanfrage
	*/
	
	public function downloadSeries($chkSeries) {
		if(!in_array($chkSeries.'.xml', $this->filterDir())) {
			$getContent = file_get_contents('http://thetvdb.com/api/'.API_TVDB.'/series/'.$chkSeries.'/all/de.xml');
			file_put_contents(DIR_SERIES.$chkSeries.'.xml', $getContent);
			$this->addSeries($chkSeries);
		}
	}	

	/**
	* Gibt gefiltert Dateien aus welche in einem Ordner sind
	* @return 	array
	*/

	private function filterDir() {
		return array_diff(scandir(DIR_SERIES), $this->dirFilter);
	}
	
	/**
	* Fügt eine Serie der Datenbank hinzu
	*/
	
	private function addSeries($seriesID) {
		$MySQLi = new mysqli(MYSQL_HOST, MYSQL_USERNAME, MYSQL_PASSWORD, MYSQL_DATABASE);
		$MySQLi->query("INSERT INTO test (`ID`, `UserID`, `series_id`, `series`) VALUES (NULL, '1', '".$seriesID."', '".$this->makeJSON($seriesID)."')");
	}

	/**
	* Generiert JSON-String für MySQL-Datenbank
	* @param 	int $seriesID ausgewählte Serien-ID 
	* @return 	string liefert JSON-String
	*/

	private function makeJSON($seriesID) {
		$xml = simplexml_load_file(DIR_SERIES.$seriesID.'.xml');
		foreach($xml->Episode as $episode) {
			if($episode->SeasonNumber > 0) {
				$string .= '"'.$episode->id.'": false, ';
				$stringCut = substr($string, 0, -2);
			}
		}
		return '{"Series": {"Name": "'.$xml->Series->SeriesName.'", "Data": {'.$stringCut.'}}}';
	}
}
?>