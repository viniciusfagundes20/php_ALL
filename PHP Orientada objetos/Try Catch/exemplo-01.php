<?php 

try{

	throw new Exception("Error Processing Request !", 400);

}catch(Exeption $e){

	echo json_encode(array(
		"Message" => $e->getMessage(),
		"line" => $e->getLine(),
		"file" => $e->getFile(),
		"code" => $->getCode()
	));

}

?>