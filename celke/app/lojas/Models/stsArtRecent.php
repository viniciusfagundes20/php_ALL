<?php 

namespace Sts\Models;

if(!defined('URL')){
	header("Location: /index");
	exit();
}

class stsArtRecent {

	private $Resultado;

	public function listarArtRecent() {

		$query = "SELECT titulo, slug FROM sts_artigos WHERE adms_sit_id = :adms_sit_id ORDER BY id DESC LIMIT :limit";

		$listar = new \Sts\Models\helper\StsRead();

		$listar->fullRead($query, "adms_sit_id=1&limit=7");

		$this->Resultado = $listar->getResultado();

		return $this->Resultado;
	}



}

 ?>