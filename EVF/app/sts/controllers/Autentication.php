<?php 

namespace Sts\controllers;

class Autentication{

	private $data;

	public function index(){

		$carregarView = new \Core\ConfigView("sts/views/include/autentication", $this->data);
        $carregarView->lite();

	}

}

?>