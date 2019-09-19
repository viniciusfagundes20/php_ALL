<?php 

$connect = new PDO("mysql:host=localhost;dbname=eef", "root", "");

$data = [
	'user' => $_POST["comentario"],
];

$SQL = "SELECT * FROM new WHERE nome = :user";

try{
	$connect->beginTransaction();
	$stmt->execute($data);
	$connect->commit();
	echo 'Registro salvo com sucesso';
}catch (Exception $e) {
	$connect->rollback();
	throw $e;
}


?>