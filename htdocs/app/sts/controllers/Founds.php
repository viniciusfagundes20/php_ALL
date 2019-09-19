<?php 

namespace Sts\Controllers;

if (!defined('URL')) {
  header("Location: /");
  exit();
}

class Founds {

	private $data;

	public function index() {

		$this->data['URL'] = "Founds";

		$object = new \Core\ConfigView("sts/views/include/founds", $this->data);
		$object->header();

	}

}

 ?>