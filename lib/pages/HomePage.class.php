<?php
class HomePage extends Template  {
	public function __construct() {
		parent::__construct();


		$this->assign('tpl', 'pages/home.tpl');
		$this->display('index.tpl');
	}
}
?>