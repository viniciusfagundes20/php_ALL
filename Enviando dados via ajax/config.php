<?php 

spl_autoload_register(function($class){

$file = "php" . DIRECTORY_SEPARATOR . $class . ".php";

if(file_exists($file)){
include $file;
}

});