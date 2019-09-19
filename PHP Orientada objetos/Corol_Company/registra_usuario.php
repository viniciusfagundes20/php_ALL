<?php

session_start();
include "bd_class.php";

$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];

if($usuario == $senha){
	echo '<script type="text/javascript">window.location.href = "https://corolcompany.000webhostapp.com/inscrevase.php?erro=2";</script>';
	return false;
}else{
	$objBd = new bd();
	$objBd->inserir($usuario, $email, md5($senha));
}

?>