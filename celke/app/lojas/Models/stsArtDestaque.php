<?php 

namespace Sts\Models;

if(!defined('URL')){
	header("Location: /index");
	exit();
}

class stsArtDestaque {

	private $Resultado;

	public function index():array{

		$query = "
			SELECT titulo, slug FROM sts_artigos 
			WHERE adms_sit_id = :adms_sit_id
			ORDER BY qnt_acesso DESC LIMIT :limit
		";

		$listar = new \Sts\Models\helper\StsRead();
		$listar->fullRead($query, "adms_sit_id=1&limit=3");

		$this->Resultado = $listar->getResultado();

		return $this->Resultado;

	}


}



?>