<?php 

require '../vendor/autoload.php';
require '../core/config.php';

class authenticate{

	public $class;
	public $object;

	function index(){

		$input = filter_input_array(INPUT_POST);

		//var_dump($input);

		$nome = $input["usuario"];
		$password = $input["senha"];
		$email = $input["email"];

		$this->existsID($nome, $email);

		/*$class = "\\sts\\Models\\connection";
		$object = new $class();

		$SQL = "SELECT * FROM eef.users WHERE nome = :nome AND password = :password";

		$db = $object->GetConn()->prepare($SQL);

		$db->bindParam(":nome", $nome);
		$db->bindParam(":password", $password);

		$db->execute();

		$row = $db->fetchAll();

		
		if(!empty($row)){

			return $row[0];

		} else {

			echo '<div class="alert alert-danger" role="alert"><i class="fa fa-fw fa-info"></i>Error: Usuário ou senha inválidos.</div>';

		}*/
	
	}

	private function existsID($name, $email){

		$class = "\\sts\\Models\\connection";
		$object = new $class();

		$SQL = "SELECT * FROM users WHERE nome = :nome or email = :email";

		$db = $object->GetConn()->prepare($SQL);

		$db->bindParam(":nome", $name);
		$db->bindParam(":email", $email);

		$db->execute();

		if(!empty($db->fetchAll())){
			echo '<div class="alert alert-danger" role="alert"><i class="fa fa-fw fa-info"></i>Error: Usuário ou email já existentes.</div>';
			return false;
		}

		return true;

	}

}

if($_SERVER['REQUEST_METHOD'] == 'POST'){

	$object = new authenticate();
	$object->index();

}

?>
<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>EEF - Registration</title>

    <link rel="stylesheet" type="text/css" href="../assents/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assents/css/estilo.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

</head>
<body class="bg-dark">

<div class="container mt-5">
	<div class="row">

		<div class="col-sm-0 col-md-3"></div>

<div class="col-sm-12 col-md-6">
	<div class="card">
	<div class="card-header">
		<a href="#" class="d-inline"><i class="fa fa-fw fa-"></i></a>
		<h3 class="lead text-center"><i class="fa fa-fw fa-registered"></i> Register</h3>
	</div>
		<div class="card-body">
			<form id="target" method="POST">
			<div class="form-group">
				<label for="usuario" class="text-center d-block"><i class="fa fa-fw fa-user-tag"></i> Usuário: </label>
				<input type="text" id="usuario" name="usuario" class="form-control text-center">
			</div>

			<div class="form-group">
				<label for="email" class="text-center d-block"><i class="fa fa-fw fa-envelope"></i> E-mail: </label>
				<input type="email" id="email" name="email" class="form-control text-center">
			</div>

			<div class="form-group">
				<label for="senha" class="text-center d-block"><i class="fa fa-fw fa-key"></i> Password: </label>
				<input type="password" id="senha" name="senha" class="form-control text-center">
			</div>

			<div class="form-group">
				<label for="senhaConfirm" class="text-center d-block"><i class="fa fa-fw fa-key"></i> Confirm password: </label>
				<input type="password" id="senhaConfirm" name="senhaConfirm" class="form-control text-center">
			</div>

			<div class="form-group">
				<button type="button" id="btnRegister" class="btn btn-secondary btn-actions" aria-label="registrar-se">Registrar-se</button>
			</div>

			</form>

			<div class="card-footer">
				<p class="lead text-muted">copyright</p>
			</div>
		</div>
	</div>

	<div class="col-sm-0 col-md-2"></div>

</div>	
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="../assents/js/bootstrap.min.js"></script>

<script type="text/javascript">

	$(document).ready(function(){
		$('#btnRegister').click(function(){
			var pass = $('#senha').val();
			var pass2 = $('#senhaConfirm').val();

			if(pass != pass2){
				alert("Error: A senha e a confirmação devem ser iguais.");
				return false;
			}else{
				var submit = $('#target');
				$(submit).submit();
			}
		});
	});
</script>

</body>
</html>