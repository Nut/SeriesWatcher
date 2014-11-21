<?php
class SearchPage extends Template  {
	public function __construct() {
		parent::__construct();

		$search = new Search();

		if($_POST['submit'] && !empty($_POST['series'])) {
			$result = $search->searchSeries($_POST['series']);
			$this->assign('valid', true);
			$this->assign('xmlSeries', $result);
		}

		if($_POST['save']) {
			if(isset($_POST['chkSeries'])) {
				$search->downloadSeries($_POST['chkSeries']);
				echo "yes";
			} else {
				echo "Bitte Serie auswählen!";
			}
		}

		$this->assign('tpl', 'pages/search.tpl');
		$this->display('index.tpl');
	}
}
?>