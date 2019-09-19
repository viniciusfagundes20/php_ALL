<?php

session_start();

include "bd_class.php";


$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];

if($usuario == $senha){
	header("location: inscrevase.php?erro=2");
	return false;
}else{
	$objBd = new bd();
	$objBd->inserir($usuario, $email, md5($senha));
}

?>