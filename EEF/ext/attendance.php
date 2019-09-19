<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>EEF - Orçamento</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

</head>
<body>

<header class="bg-dark">
	<nav class="navbar navbar-expand-lg">
	<div class="container">
		<a href="./index.html" class="navbar-brand">
			<span class="sr-only">Voltar a home</span>
			<i class="fa fa-fw fa-arrow-left text-light"></i>
		</a>

		<ul class="navbar-nav ml-auto text-light">

			<li class="nav-item">
				<a href="#" class="nav-link text-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-fw fa-user-tag text-light" ></i> Vinicin</a>

				<div class="dropdown-menu" aria-labelledby="Menu">
					<a href="#" class="dropdown-item"><i class="fa fa-fw fa-cog"></i> Configurações</a>
					 <div class="dropdown-divider"></div>
					 <a href="#" class="dropdown-item"><i class="fa fa-fw fa-sign-out-alt"></i> Logout</a>
				</div>
						
			</li>
		</ul>
		</div>
	</nav>
</header>


<form class="container mt-5">
	<div class="row">
		<div class="col-md-6 col-sm-12">
			<div class="form-group">
				<label for="name">Nome completo:</label>
				<input type="text" name="name" class="form-control" placeholder="Ex.: Vinicius Daniel Fagundes">
			</div>

			<div class="form-group">
				<label for="">Seu email:</label>
				<input type="email" name="email" class="form-control" placeholder="ex.: Vinicius@example.com">
			</div>

			<div class="form-group">
			  <p class="lead">Por favor, escreva um texto de modo formal. O jeito que você quer sua festa:</p>
			  <textarea class="form-control purple-border" id="textObservacoes" rows="4" placeholder="Ex.: Quero doces, bolo, mesas."></textarea>
			</div>

		</div>

		<div class="col-md-6 col-sm-12">
			<div class="form-group">
				
				<div class="card">
					<div class="card-header">
						<p class="lead text-center">Por favor, coloque todos as variedades que desejás adquirir:</p>
					</div>
					<div class="card-body">
						<div class="row">
					<div class="col-6">
						<div class="custom-control custom-switch">
							<input type="checkbox" id="checkbox" class="custom-control-input">
							<label class="custom-control-label" for="checkbox">Buffet completo</label>

							<div id="buffet_card" class="form-group">
								<div class="card">
									<div class="card-header">
										<p class="lead text-muted">Por favor insirá para quantas pessoas. Ex.: 200.</p>
										<input type="text" id="buffet" name="buffet" placeholder="ex.: 150" class="form-control">
										<button type="button" id="btn_ready" class="btn btn-sm btn-primary mt-2">ready</button>
									</div>
								</div>
							</div>

						</div>

						<div class="custom-control custom-switch">
							<input type="checkbox" id="checkbox1" class="custom-control-input">
							<label class="custom-control-label" for="checkbox1">Taxa de gás</label>
						</div>

						<div class="custom-control custom-switch">
							<input type="checkbox" id="checkbox2" class="custom-control-input">
							<label class="custom-control-label" for="checkbox2">Forros para mesas</label>
						</div>

						<div class="custom-control custom-switch">
							<input type="checkbox" id="checkbox3" class="custom-control-input">
							<label class="custom-control-label" for="checkbox3">Porteiro</label>
						</div>
					</div>

					<div class="col-6">
						<div class="custom-control custom-switch">
							<input type="checkbox" id="checkbox4" class="custom-control-input">
							<label class="custom-control-label" for="checkbox4">Monitor</label>
						</div>

						<div class="custom-control custom-switch">
							<input type="checkbox" id="checkbox5" class="custom-control-input">
							<label class="custom-control-label" for="checkbox5">Doces</label>
						</div>

						<div class="custom-control custom-switch">
							<input type="checkbox" id="checkbox6" class="custom-control-input">
							<label class="custom-control-label" for="checkbox6">Personalizada</label>
						</div>
					</div>

				</div>
					</div>
				</div>
				<!-- card body fechamento -->
			</div>

			<div class="form-group mt-1" style="display: flex;">
		
				

				<button type="button" class="btn btn-primary mb-3 mr-2">Enviar orçamento</button>
				<button type="reset" class="btn btn-warning mb-3 mr-2">Limpar conteúdo</button>
				<button type="button" class="btn btn-danger mb-3 mr-2">Avaliar página</button>

			</div>

		</div>
	</div>
</form>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#buffet_card').hide();

		$('#checkbox').click(function(){
			if(document.getElementById('checkbox').checked){
				$('#buffet_card').show();
			}else{
				$('#buffet_card').hide();
			}
		});

		$('#btn_ready').click(function(){

			var buffet = $('#buffet');

			if(buffet.val() != ""){
				$('#buffet_card').hide();
			}else{
				alert("error insira uma valor válido !");
			}
			
		});



	});
</script>

</body>
</html>