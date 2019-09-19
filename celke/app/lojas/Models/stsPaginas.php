<?php 

namespace Sts\Models;

if(!defined('URL')){
	header("Location: /Home");
	exit();
}

echo "<br><br><br>";

class stsPaginas {

	private $UrlController;
	private $Resultado;

	public function index($UrlController = null) {

		$this->UrlController = (string)$UrlController;


		$sql = "
			SELECT pg.id, tps.tipo FROM sts_paginas pg

			INNER JOIN sts_tps_pgs tps ON tps.id = pg.sts_tps_pg_id

			WHERE pg.sts_situacao_pg_id = :sts_situacao_pg_id
			AND pg.controller = :controller
			LIMIT :limit
		";

		$object = new \Sts\Models\helper\stsRead();
		$object->fullRead($sql, "sts_situacao_pg_id=1&controller=".$this->UrlController."&limit=1");

		$this->Resultado = $object->getResultado();

		var_dump($this->Resultado);

		return $this->Resultado;

	}


}

?>