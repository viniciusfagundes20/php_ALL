<?php 

function error_handles($code, $message, $file, $line){

	echo json_encode(array(
		"code" => $code,
		"message" => $message,
		"line" => $line,
		"file" => $file
	));

}

$error = set_error_handler("error_handles");

echo 100 / 0;

print_r($erro);

?>