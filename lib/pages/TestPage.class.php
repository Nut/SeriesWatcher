<?php
class TestPage extends Template  {
	public function __construct() {
		parent::__construct();

		$this->assign("searchbla", "wer!!!");

		$this->assign("tpl", "pages/test.tpl");
		$this->display('index.tpl');
	}
}
?>