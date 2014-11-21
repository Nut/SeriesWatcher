<?php 
function Autoloader($class) {

	$pathClass = DIR_CLASS . $class . '.class.php';
	$pathPages = DIR_PAGES_CLASS . $class . '.class.php';

	if(is_file($pathClass) && !class_exists($class)) require_once $pathClass;
	if(is_file($pathPages) && !class_exists($class)) require_once $pathPages;
}

spl_autoload_register('Autoloader');
?>