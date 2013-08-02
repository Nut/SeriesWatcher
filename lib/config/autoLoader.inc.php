<?php 
	function  __autoload($class_name) {
		include DIR_CLASS . $class_name . '.class.php';
	}
?>