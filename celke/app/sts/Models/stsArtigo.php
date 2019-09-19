<?php 

namespace Sts\Models;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

class stsArtigo {

	private $Artigo;
	private $Resultado;

	public function index($param = null) {

		$this->Artigo = (string)$param;

		$sql = "
			SELECT id, titulo, conteudo, imagem, created FROM sts_artigos
			WHERE slug = :slug AND adms_sit_id = :adms_sit_id
			LIMIT :limit
		";

		$object = new \Sts\Models\helper\stsRead();
		$object->fullRead($sql, "slug=".$this->Artigo."&adms_sit_id=1&limit=1");

		$this->Resultado = $object->getResultado();

		if(empty($this->Resultado)){
			header("Location: /celke/blog?error=404");
			exit();
		}

		return $this->Resultado;

	}

}


?>