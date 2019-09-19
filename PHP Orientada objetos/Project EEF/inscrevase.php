<?php $erro = isset($_GET['erro']) ? $_GET['erro'] : 0; ?>


<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>Inscrever-se EEF</title>
		
		<!-- jquery - link cdn -->
		<script src="js/jquery-3.3.1.min.js"></script>
		<!-- bootstrap - link cdn -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<script type="text/javascript">
			
			$(document).ready(function(){
				
				$('#btn_submit').click(function(){

					var user = $('#usuario').val();
					var senha = $('#senha').val();

					if(user == senha){
						alert('Para sua segurança, insira uma senha diferente do usuário !');
						return false;
					}
				})


			});

		</script>
	
	</head>

	<body style="font-family: Trebuchet MS, Helvetica, sans-serif; font-size: 17px; background: default;">

		<!-- Static navbar -->
	    <nav class="navbar navbar-default navbar-static-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	         </div>
	      </div>
	    </nav>


	    <div class="container">
	    	
	    	<br /><br />

	    	<div class="col-md-4"></div>
	    	<div class="col-md-4">
	    		
	    		<h3>Inscreva-se já.</h3>
	    		<br />
				<form method="post" action="registra_usuario.php" id="formCadastrarse">

					
					<div class="form-group input-group">
					  	<span class="input-group-addon" id="sizing-addon2">@</span>
					  	<input type="text" class="form-control" id="usuario" name="usuario" placeholder="Username" aria-describedby="sizing-addon2">
					</div>


					<div class="form-group">
						<input type="email" class="form-control" id="email" name="email" placeholder="Email" required="requiored">
					</div>
					
					<div class="form-group">
						<input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required="requiored">
					</div>
					
					<button type="submit" id="btn_submit" class="btn btn-primary form-control">Inscreva-se</button>

				</form>
			</div>
			<div class="col-md-4"></div>

			<div class="clearfix"></div>
			<br />
			<div class="col-md-4"></div>
			<div class="col-md-4">
				
	      		<label id="label_info" style="color: red; font-size: 18px; text-align: center;"><?php
					
					switch($erro){
						case 1:
							echo "Error: Usuário já existente !";
						break;
					}				
					

				?>
				</label>
			</div>
			<div class="col-md-4"></div>

		</div>


	    </div>
	
		<script src="js/bootstrap.min.js"></script>
	
	</body>
</html>