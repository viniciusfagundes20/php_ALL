<?php

session_start();

include "bd_class.php";

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$cons = new bd();
$cons->consultaLogin($usuario, md5($senha));



?>