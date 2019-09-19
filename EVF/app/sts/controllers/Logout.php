<?php 

namespace sts\controllers;


class Logout{

	private $data;

	public function index(){

		$carregarView = new \Core\ConfigView("sts/views/include/logout", $this->data);
        $carregarView->lite();

	} 

}


 ?>