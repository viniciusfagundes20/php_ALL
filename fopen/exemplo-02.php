<?php 

require_once("config.php");

$sql = new sql();

$users = $sql->select("SELECT * FROM tb_users ORDER BY id");

$headers = array();

foreach ($users[0] as $key => $value) {
	array_push($headers, ucfirst($key));
}

$headers = implode(",", $headers);

$file = fopen("usuarios.csv", "w+");

fwrite($file, $headers . "\r\n");

foreach ($users as $row) {
	
	$data = array();

	foreach ($row as $key => $value) {
		
		array_push($data, $value);

	} // end for each column

	fwrite($file, implode(",", $data) . "\r\n");

} //End for each

fclose($file);

echo "Registro convertidos .cvs";


 ?>