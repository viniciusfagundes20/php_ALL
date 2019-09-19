<?php

namespace App\sts\Controllers;

if (!defined('URL')) {
    header("Location: /");
    exit();
}


class Artigo
{

	private $artigo;
	private $data;

    public function index($parameters = null) {

    	$this->artigo = (string)$parameters;

    	$stsArtigo = new \Sts\Models\stsArtigo();
    	$this->data['sts_artigos'] = $stsArtigo->index($this->artigo);

		$id = $this->data['sts_artigos'][0]['id'];

    	$Next_Back = new \Sts\Models\stsArtNextBack();
		$this->data['positions'] = $Next_Back->index((int)$id);

		$listar_menu = new \Sts\Models\stsMenu();
		$this->data['menu'] = $listar_menu->listName();

		$this->data['url'] = "Artigo";

        $object = new \Core\ConfigView('sts/Views/blog/artigo', $this->data);
        $object->renderizar();

    }

}
