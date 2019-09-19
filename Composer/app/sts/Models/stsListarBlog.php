<?php 

namespace sts\Models;

use PDO;

class stsListarBlog{

	private static $con = "DB";

	private $limit = 10;

	public function listar(){

		$class = "\\sts\\Models\\".self::$con;

		$object = new $class();

		$teste = $object->GetConn();

		$QUERY = "SELECT ID, TITULO, CONTEUDO FROM artigos LIMIT :limit";

		$exec = $teste->prepare($QUERY);
		
		$exec->bindParam(":limit", $this->limit, PDO::PARAM_INT);

		$exec->execute();

		$row['artigos'] = $exec->fetchAll();

		//echo json_encode($row);

		return $row;

	}

}

?>