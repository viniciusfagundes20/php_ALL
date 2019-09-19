<?php

namespace sts\Controllers;

if(!defined("URL")){
	header("Location: /");
	exit();
}


class home{

	function index(){

    	$class = "\\core\\configViews";

    	$object = new $class("Views/onePage");
    	$object->renderizar();
    	


	}

}


?>