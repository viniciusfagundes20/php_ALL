<?php 

namespace Sts\Models;

if (!defined('URL')) {
    header("Location: /");
    exit();
}


class stsArtNextBack {

	private $lastInsertId;
	private $idArt;
	private $data;

	public function index($id = null) {

		$object = new \Sts\Models\helper\stsRead();

		$this->idArt = (int)$id;
		$this->lastInsertId = $this->getLastId($object);


		if($id == 1){
			$this->data['next'] = $this->next($this->idArt, $object);
		} else if($id == $this->lastInsertId){
			$this->data['previous'] = $this->previous($this->idArt, $object);
		}else{
			$this->data['next'] = $this->next($this->idArt, $object);
			$this->data['previous'] = $this->previous($this->idArt, $object);
		}

		return $this->data;

	}

	public function next($id, $obj) {
		$sql = "SELECT slug FROM sts_artigos WHERE id > :id ORDER BY slug ASC LIMIT 1";
		$obj->fullRead($sql, "id=".$id);
		return $obj->getResultado()[0]['slug'];

	}

	public function previous($id, $obj) {
		$sql = "SELECT slug FROM sts_artigos WHERE id < :id ORDER BY slug DESC LIMIT 1";
		$obj->fullRead($sql, "id=".$id);
		return $obj->getResultado()[0]['slug'];

	}

	public function getLastId($obj) {
		$sql = "SELECT id FROM sts_artigos WHERE id > 1 ORDER BY id DESC LIMIT 1";
		$obj->fullRead($sql);
		return $obj->getResultado()[0]['id'];
	}

}


?>