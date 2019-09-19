<?php 

spl_autoload_register(function($class) {

	$ext = '.php';

	$path = array('library', 'config');

	$ds = DIRECTORY_SEPARATOR;

	foreach ($path as $key) {
		$fullFile = $key . $ds . $class . $ext;

		if(file_exists($fullFile)) require_once($fullFile);
	}


});


?>