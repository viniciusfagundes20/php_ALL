<?php

include "bd_class.php";

if(!isset($_SESSION['usuario'])){
	$user = isset($_COOKIE["f56441d95028a3310996349dcc3948cx"]) ? : 0;
	$pass = isset($_COOKIE["d56441f95028a331b996349dcb3948e6"]) ? : 0;

	if($user and $pass){

		$USUARIO = $_COOKIE["f56441d95028a3310996349dcc3948cx"];
		$SENHA = $_COOKIE["d56441f95028a331b996349dcb3948e6"];
		$cookie = false;

		$sql = "SELECT * FROM REGISTROS WHERE USUARIO = '$USUARIO' AND SENHA = '$SENHA';";

		$bd = new bd;
		$query = mysqli_query($bd->connection(), $sql);

		if(!$query){
			return false;
		}else{
			
			$data = mysqli_fetch_array($query);

			if(isset($data['USUARIO'])){
			echo "Usuário authenticado com sucesso !";

			$_SESSION['usuario'] = $data['USUARIO'];
			$_SESSION['email'] = $data['EMAIL'];
			$_SESSION['id_usuario'] = $data['ID'];
			$_SESSION['admin'] = $data['ADMIN'];

		}else{
				return false;
			}
		}
	}
}
?>

