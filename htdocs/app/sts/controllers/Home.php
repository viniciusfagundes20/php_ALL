<?php 

namespace Sts\Controllers;

if(!defined('URL')){
	header("Location: ./");
	extit();
}

class Home {

	private $data;

	public function index() {

		$sql = new \Sts\Models\helper\StsRead();

		$query = "
			SELECT F.id, F.usuario, F.title, F.img, F.description, F.button, C.class FROM sts_fire F 
			INNER JOIN sts_colors C ON F.color = C.id 
			WHERE F.active = 1 ORDER BY F.id DESC LIMIT 3
		";

		$sql->fullRead("SELECT file, ext FROM sts_carousel ORDER BY id DESC LIMIT 3");
		$this->data['carousel'] = $sql->getResultado();

		$sql->fullRead($query);
		$this->data['cards-fire'] = $sql->getResultado();

		$sql->fullRead('SELECT * FROM sts_videos ORDER BY id DESC LIMIT 3');
		$this->data['sts_videos'] = $sql->getResultado();

		$this->data['URL'] = "Home";

		$view = new \Core\ConfigView("sts/views/include/home", $this->data);
		$view->renderizar();

			
	}

}


 ?>