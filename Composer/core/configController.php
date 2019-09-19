<?php 

namespace core;

class configController{

	private $url;
	private static $home = "home";
	private static $blog = "blog";

	public function __construct(){

		if(!empty(filter_input(INPUT_GET, "url", FILTER_DEFAULT))){
			$this->url = filter_input(INPUT_GET, "url", FILTER_DEFAULT);

			$url = explode("/", $this->url);

			foreach ($url as $key => $value) {
				echo $key.": ".$value.'<br>';
			}

		}
	}

	public function carregar(){

		$class = "\\sts\\Controllers\\".self::$home;

		$objeto = new $class();

		$objeto->index();

	}


	public function carregarBlog(){


		$class = "\\sts\\controllers\\".self::$blog;

		$object = new $class();

	}

}

?>