<?php 

$ds = DIRECTORY_SEPARATOR;
$path = "img";

$data = array();

if(!is_dir($path)){

	mkdir($path);
	echo "Diretory create successfuly!<br/>";

}

$img = scandir($path);

foreach ($img as $value) {
	
	if(!in_array($value, array(".", ".."))){

		$fileName = "img" . $ds . $value; 

		$info = pathinfo($fileName);

		$info["size"] = filesize($fileName);
		$info["modified"] = date("d-m-Y H:i:s", filemtime($fileName));

		$info["url"] = str_replace("/", "\\", "http://localhost/DIR/exmplo%20pratico/" . $fileName);

		array_push($data, $info);

	}

}

echo json_encode($data);

 ?>