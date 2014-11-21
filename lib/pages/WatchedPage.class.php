<?php
class WatchedPage extends Template  {
	public function __construct() {
		parent::__construct();

		$TVDB = new TVDB();

		$seriesLink = $TVDB->showSeries();
		$this->assign('seriesLink', $seriesLink);

		$createPage = $TVDB->createPage();

		if(isset($createPage)) {
			$this->assign('valid', true);
			$this->assign('currentSelection', $createPage);
			$this->assign('completeSeries', $TVDB->listAll());
		}

		if($_POST['save']) {
			$TVDB->saveList();
			$this->assign('reload', true);
		}

		$this->assign('tpl', 'pages/watched.tpl');
		$this->display('index.tpl');
	}
}
?>