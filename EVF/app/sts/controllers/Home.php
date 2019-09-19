<?php 

namespace Sts\controllers;

class Home{

	private $data;

	public function index(){

		$carregarView = new \Core\ConfigView("sts/views/include/home", $this->data);
        $carregarView->renderizar();

	} 

}

 ?>