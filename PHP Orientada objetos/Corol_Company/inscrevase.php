<?php $erro = isset($_GET['erro']) ? : 0; ?>


<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Corol Company</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


	
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
						case 2:
							echo "Error: Usuário não pode ser o mesmo que a senha !";
						break;
					}				
					

				?>
				</label>
			</div>
			<div class="col-md-4"></div>

		</div>


	    </div>
	
		<script src="js/bootstrap.min.js"></script>
	
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

	</body>
</html>