<?php 

namespace Sts\models;

class stsHeader{

	private $UrlParam;
	private $Resultado;

	public function listener($urlParam){

		$this->UrlParam = $urlParam;

		$query = "SELECT SP.id, SP.titulo, SP.keywords, SP.description, SP.author, SP.imagem, SR.tipo 
		FROM sts_paginas SP
		INNER JOIN sts_robots SR ON SP.sts_robot_id = SR.id
		WHERE SP.controller = :controller
		ORDER BY SP.id ASC LIMIT :limit
		";

		$object = new \Sts\Models\helper\StsRead();
		$object->fullRead($query, "controller={$this->UrlParam}&limit=1");

		$this->Resultado = $object->getResultado();

		return $this->Resultado;
	}


}

?>