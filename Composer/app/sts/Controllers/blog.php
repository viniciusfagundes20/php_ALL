<?php 

namespace sts\Controllers;

class blog{

	private static $listar = "stslistarBlog";
	private static $viwer = "configViwer";


	public function __construct(){
		
		$listar = "\\sts\\Models\\".self::$listar;
		$viwer = "\\core\\". self::$viwer;

		$object = new $listar();
		$data = $object->listar();

		$objetViwer = new $viwer("Sts/Views/listarArtigo", $data);

		$objetViwer->rendering();

		
 
	}



}

?>