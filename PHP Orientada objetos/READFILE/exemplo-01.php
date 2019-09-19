<?php 

$filename = "usuarios.csv";

if(file_exists($filename)){

	$file = fopen($filename, "r");

	$headers = fgets($file);

	while ($row = fgets($file)){
		var_dump($row);
	}

fclose($file);

}

?>