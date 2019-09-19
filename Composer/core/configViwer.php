<?php 

namespace core;

class configViwer{

	private $name;
	private $data;

	public function __construct($name, array $data = null){

		$this->name = (string) $name;

		$this->data = (array) $data;

	}

	public function rendering(){

		$file = "app/" . $this->name . ".php";

		if(file_exists($file)):
			
			include $file;

		endif;
	}

	
}

?>