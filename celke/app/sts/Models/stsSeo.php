<?php

namespace Sts\models;

if(!defined('URL')){
    header("Location: /home");
}

class stsSeo{

	private $IdParam;
    private $Resultado;

    public function index($idParam) {

    	$this->IdParam = $idParam;

    	$object = new \Sts\models\helper\StsRead();
    	$this->Resultado = $object->fullRead("SELECT * FROM sts_seo WHERE id = :id LIMIT :limit", "id=1&limit=1");

    	return $this->Resultado[0];

    }


}

?>