<?php 

require '../vendor/autoload.php';
require '../core/config.php';

$class = "\\sts\\Views\\ext\\data";
$data = new $class();

$data->return();

if(!empty($user)){

	$_SESSION["deslogin"] = true;
	header("location: /eef");
	
}

class authenticate{

	function index(){

		$input = filter_input_array(INPUT_POST);

		//var_dump($input);

		$nome = $input["usuario"];
		$password = $input["senha"];


		$class = "\\sts\\Models\\connection";
		$object = new $class();

		$SQL = "SELECT * FROM eef.users WHERE nome = :nome AND password = :password";

		$db = $object->GetConn()->prepare($SQL);

		$db->bindParam(":nome", $nome);
		$db->bindParam(":password", $password);

		$db->execute();

		$row = $db->fetchAll();

		
		if(!empty($row)){

			$_SESSION["user"] = $row[0]["nome"];
			$_SESSION["email"] = $row[0]["email"];
			$_SESSION["photo"] = $row[0]["img"];
			$_SESSION["adm"] = $row[0]["adm"];
			$_SESSION["deslogin"] = 1;

			return $row[0];

		} else {

			echo '<div class="alert alert-danger" role="alert"><i class="fa fa-fw fa-info"></i>Error: Usuário ou senha inválidos.</div>';

		}
	
	}
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){

	$object = new authenticate();
	if(!empty($object->index())){
		header("location: /eef");

	}

}

?>
<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>EEF - Athenticate</title>

    <link rel="stylesheet" type="text/css" href="../assents/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <style type="text/css">
    	/* The switch - the box around the slider */
		.switch {
		  position: relative;
		  display: inline-block;
		  width: 60px;
		  height: 34px;
		  float: left;
		}

		/* Hide default HTML checkbox */
		.switch input {display:none;}

		/* The slider */
		.slider {
		  position: absolute;
		  cursor: pointer;
		  top: 0;
		  left: 0;
		  right: 0;
		  bottom: 0;
		  background-color: #ccc;
		  -webkit-transition: .4s;
		  transition: .4s;
		}

		.slider:before {
		  position: absolute;
		  content: "";
		  height: 26px;
		  width: 26px;
		  left: 4px;
		  bottom: 4px;
		  background-color: white;
		  -webkit-transition: .4s;
		  transition: .4s;
		}

		input.default:checked + .slider {
		  background-color: #444;
		}

		input:checked + .slider:before {
		  -webkit-transform: translateX(26px);
		  -ms-transform: translateX(26px);
		  transform: translateX(26px);
		}
    </style>

</head>
<body class="bg-dark">

<div class="container mt-5">
	<div class="row">

		<div class="col-md-3 col-sm-0"></div>

<div class="col-md-6 col-sm-12">
	<div class="card">
	<div class="card-header">
		<h3 class="lead d-inline">Athenticate</h3>
		<a href="./index.html" class="close d-inline" role="button" aria-label="Home">&times;</a>
	</div>
		<div class="card-body">
			<form id="target" method="POST">
			<div class="form-group">
				<label for="usuario" class="text-center d-block"><i class="fa fa-fw fa-user-tag"></i> Usuário: </label>
				<input type="text" id="usuario" name="usuario" class="form-control text-center" placeholder="Usuário ou email">
			</div>

			<div class="form-group">
				<label for="senha" class="text-center d-block"><i class="fa fa-fw fa-key"></i> Password: </label>
				<input type="password" id="senha" name="senha" class="form-control text-center" placeholder="password">
			</div>


			<div class="form-group">
				
				<p class="d-inline-block">
				<span class="lead">&nbsp;Lembrar usuário</span>
					<label class="switch">
			      		<input type="checkbox" class="default" name="checkbox">
			       		<span class="slider"></span>
			       	</label>				
				</p>

				<button type="button" id="btnLogar" class="btn btn-danger btn-lg d-inline-block float-right" aria-label="registrar-se">Authenticate</button>


			</div>

			</form>

			<div class="card-footer">
				<p class="lead text-muted">Ainda não tem conta, <a href="#">click aqui</a> para registrar uma agora</p>
			</div>
		</div>
	</div>


	<div class="col-md-3 col-sm-0"></div>

</div>	
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script type="text/javascript">

	$(document).ready(function(){

		$('#usuario').on('keypress', function(e){ if (e.which == 13) $('#btnLogar').click(); });
		$('#senha').on('keypress', function(e){ if (e.which == 13) $('#btnLogar').click(); });


		$('#btnLogar').click(function(){

			var user = $('#usuario').val();
			var pass = $('#senha').val();

			if(user != null && pass != null){
				var target = $('#target');
				$(target).submit();
			}else{
				return false;
			}
		});
	});
</script>

</body>
</html>