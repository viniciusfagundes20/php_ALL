<?php 

namespace Sts\Models;

if(!defined('URL')){
	header("Location: /index");
	exit();
}

class stsSobreAutor {

	private $Resultado;

	public function index():array {

		
		$query = "
			SELECT * FROM sts_sobres
			WHERE adms_sit_id = :adms_sit_id
			LIMIT :limit
		";

		$parameters = "adms_sit_id=1&limit=1";

		$exec = new \Sts\Models\helper\StsRead();
		$exec->fullRead($query, $parameters);

		$this->Resultado = $exec->getResultado();

		return $this->Resultado;

	}



}

?>