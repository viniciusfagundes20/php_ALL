<?php 

namespace Sts\Controllers;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

class contato {

	private $data;
	private $resultado;

	public function index() {

		$this->data['URL'] = "Blog";

		$view = new \Core\ConfigView("sts/views/include/contato", $this->data);
		$view->renderizar();

	}

}


 ?>