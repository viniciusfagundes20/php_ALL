<?php 

namespace Sts\controllers;

class File_404{

	private $data;

	public function __construct($url){

		$this->data['url'] = $url;

		$object = new \Core\configView("sts/views/include/page404", $this->data);
		$object->lite();

	}
}


?>
