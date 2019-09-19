<?php 

namespace Sts\Models;

if(!defined('URL')){
	header("Location: /Home");
	exit();
}

//echo "<br><br><br>";

class stsPaginas {

	private $UrlController;
	private $Resultado;

	public function index($UrlController = null) {

		$this->UrlController = (string)$UrlController;


		$sql = "
			SELECT PG.id, TP.tipo FROM sts_paginas PG 
			INNER JOIN sts_tps_pgs TP ON TP.id = PG.sts_tps_pg_id 
			WHERE PG.controller = :controller  
			AND sts_situacao_pg_id = 1 LIMIT 1
		";

		$object = new \Sts\Models\helper\stsRead();
		$object->fullRead($sql, "controller=".$this->UrlController);

		$this->Resultado = $object->getResultado();

		//var_dump($this->Resultado);

		return $this->Resultado;

	}


}

?>