<?php

namespace Sts\Controllers;

if (!defined('URL')) {
    header("Location: /");
    exit();
}


class Artigo
{

	private $artigo;
	private $data;

    public function index($parameters = null) {

    	$this->artigo = (int)$parameters;

        if(!$this->artigo){
            header("Location: ".URL."founds");
        }

        $sql = new \Sts\Models\helper\StsRead();

        $query = "SELECT * FROM sts_artigos S 
            WHERE S.id = :id AND S.adms_sit_id = :adms_sit_id 
            LIMIT 1";

        $sql->fullRead("SELECT id FROM sts_artigos ORDER BY id DESC LIMIT 1");
        $count = $sql->getResultado()[0]['id'];

        if($this->artigo <= $count && $this->artigo > 1){
            $previous = (int)$this->artigo - 1;
            $this->data['previous'] = $previous;
        }

        if($this->artigo < $count && $this->artigo > 0){
            $next = (int)$this->artigo + 1;
            $this->data['next'] = $next;
        }

        $sql->fullRead($query, "id=".$this->artigo."&adms_sit_id=1");
        $this->data['sts_artigo'] = $sql->getResultado();

        $this->data['URL'] = "Artigo";

        $object = new \Core\ConfigView('sts/Views/include/artigo', $this->data);
        $object->renderizar();

    }

}
