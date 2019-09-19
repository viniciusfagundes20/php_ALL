<?php 

namespace core;

class configViews
{

	private $nome;
	private $data;

	public function __construct($nome){

		$this->nome = (string)$nome;

	}

	public function renderizar(){

		include "./app/sts/Views/include/cabecalho.php";

		$menu = "./app/sts/Views/include/menu.php";
		$services = "./app/sts/Views/services/services.php";

		$timeline = "./app/sts/Views/services/timeline.php";

		//$forum = "./app/sts/Views/forum/forum.php";


			include $menu;
			include $services;
			include $timeline;
			
			//include $forum;

		include "./app/sts/Views/include/rodape.php";


	}

}

?>