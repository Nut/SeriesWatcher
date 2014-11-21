<?php 
class TVDB {
	
	private $allSeriesChk = array();
	private $currentSelect;

	/**
	* Zeigt die Serien, welche man gedownloaded hat
	* @return 	array $arr liefert alle Serien von der Datenbank
	*/
	
	public function showSeries() {
		$MySQLi = new mysqli(MYSQL_HOST, MYSQL_USERNAME, MYSQL_PASSWORD, MYSQL_DATABASE);
		$result = $MySQLi->query('SELECT series_id FROM test WHERE UserID = 1');

		while($row = $result->fetch_array(MYSQL_ASSOC)) {
			$this->allSeriesChk[] = $row['series_id'];
		}

		for($i = 0; $i < count($this->allSeriesChk); $i++) {
			$arr[$i]['seriesid'] 	= (string)$this->allSeriesChk[$i];
			$arr[$i]['seriesname'] 	= (string)$this->getSeriesName($this->allSeriesChk[$i]);
		}

		return $arr;	
	}
	
	/**
	* Erstellt die Seite zur gewählten Serie
	* @return 	array $this->currentSelect aktuell ausgewählte Serie
	*/

	public function createPage() {
		$this->currentSelect = $_GET['series'];
		for($i = 0; $i < count($this->allSeriesChk); $i++) {
			if($this->currentSelect == $this->allSeriesChk[$i]) {
				return $this->currentSelect;
			}
		}
	}
	
	/**
	* Listet die Episoden einer Serie, welche man gesehen hat
	* @return 	array $arr liefert alle Daten einer Serie
	*/
		
	public function listAll() {
		$MySQLi = new mysqli(MYSQL_HOST, MYSQL_USERNAME, MYSQL_PASSWORD, MYSQL_DATABASE);
		$result = $MySQLi->query("SELECT `series` FROM `test` WHERE series_id = ".$this->currentSelect."");
		$row = $result->fetch_row();
		
		$decodeXML = json_decode($row[0], true);

		for($i = 0; $i < count($decodeXML["Series"]["Data"]); $i++) {
			$arr[$i]['seasonnumber'] 	= (string)$this->getSeasonNumber(key($decodeXML['Series']['Data']));
			$arr[$i]['episodenumber'] 	= (string)$this->getEpisodeNumber(key($decodeXML['Series']['Data']));
			$arr[$i]['episodename'] 	= (string)$this->getEpisodeName(key($decodeXML['Series']['Data']));
			$arr[$i]['id'] 				= (string)key($decodeXML['Series']['Data']);
			$arr[$i]['checked'] 		= (string)(current($decodeXML['Series']['Data']) == true) ? 'checked' : '';
			next($decodeXML['Series']['Data']);
		}

		return $arr;
	}

	/**
	* Speichert die gecheckten Episoden in die Datenbank
	*/
	
	public function saveList() {
		$MySQLi = new mysqli(MYSQL_HOST, MYSQL_USERNAME, MYSQL_PASSWORD, MYSQL_DATABASE);
		$result = $MySQLi->query("SELECT `series` FROM `test` WHERE series_id = ".$this->currentSelect."");
		$row = $result->fetch_row();
		$decodeArray = json_decode($row[0], true);
		$replacement = $_POST['check']; //sucht die die gecheckt wurden
		
		//Setzt alles auf false
		foreach($decodeArray["Series"]["Data"] as $key => $value) { 
		  $decodeArray["Series"]["Data"][$key] = false; 
		} 
		
		//Setzt die gechecktet auf true
		foreach($replacement as $new) {
			$decodeArray["Series"]["Data"][$new] = true;
		}
		
		$MySQLi->query("UPDATE test SET series = '".json_encode($decodeArray)."' WHERE series_id = '".$this->currentSelect."'");
	}
	
	/*
		Liefert den Seriennamen der eingegebenen Serien-ID
	*/

	/**
	* Liefert den Seriennamen der eingegebenen Serien-ID
	* @param 	int $id Serien-ID 
	* @return 	string $series->SeriesName Serienname
	*/
	
	private function getSeriesName($id) {
		$xml = simplexml_load_file(DIR_SERIES.$id.'.xml');
		foreach($xml->Series as $series) {
			return $series->SeriesName;
		}
	}

	/**
	* Liefert den Episodenname der eingegebenen Serien-ID
	* @param 	int $id Serien-ID 
	* @return 	string $episode->EpisodeName Episodenname
	*/
	
	public function getEpisodeName($id) {
		$xml = simplexml_load_file(DIR_SERIES.$this->currentSelect.'.xml');
		foreach($xml->Episode as $episode) {
			if($episode->id == $id) {
				return $episode->EpisodeName;
			}
		}
	}

	/**
	* Liefert die Staffelnummer der eingegebenen Serien-ID
	* @param 	int $id Serien-ID 
	* @return 	string $episode->SeasonNumber Staffelnummer
	*/
	
	public function getSeasonNumber($id) {
		$xml = simplexml_load_file(DIR_SERIES.$this->currentSelect.'.xml');
		foreach($xml->Episode as $episode) {
			if($episode->id == $id) {
				return $episode->SeasonNumber;
			}
		}
	}

	/**
	* Liefert den Episodennummer der eingegebenen Serien-ID
	* @param 	int $id Serien-ID 
	* @return 	string $episode->EpisodeNumber Episodennummer
	*/
	
	public function getEpisodeNumber($id) {
		$xml = simplexml_load_file(DIR_SERIES.$this->currentSelect.'.xml');
		foreach($xml->Episode as $episode) {
			if($episode->id == $id) {
				return $episode->EpisodeNumber;
			}
		}
	}
}
?>