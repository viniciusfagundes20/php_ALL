<?php 

$connect = new PDO("mysql:host=localhost;dbname=tutoria", "root", "");

$data = [
	'user' => $_POST["user"],
];

$SQL = "SELECT * FROM tb_name WHERE nome = :user";

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