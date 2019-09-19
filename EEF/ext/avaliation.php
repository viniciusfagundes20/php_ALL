
<!DOCTYPE html>
<html lang="pt">
<head>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>One page - home</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

</head>
<body onload="myFunction()">


<header class="navbar navbar-expand-lg navbar-dark bg-dark">
	<nav class="container-fluid">

	<a href="./index.html" class="navbar-brand text-light">
		<i class="fa fa-fw fa-arrow-left text-light"></i>
	</a>

	<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menu"aria-expand="false" aria-label="Menu">
		<span class="navbar-toggler-icon text-light"></span>
	</button>

	<div id="menu" class="collapse navbar-collapse">
			<ul class="navbar-nav ml-auto text-light">

					<li class="nav-item">
						<a href="#" class="nav-link">Serviços</a>
					</li>

					<!-- PHP log -->

					<li class="nav-item">
						<a href="#" class="nav-link">!usuário</a>
					</li>

			</ul>
		</div>
	</nav>
</header>


<div class="container mt-5 mb-5">
	<div class="row">
		<div class="col-md-6 col-sm-12">
			<div class="form-group">
				
				<p class="lead">Insira sua nota:</p>

				<select id="mySelect" class="form-control" onchange="myFunction()">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5" selected>5</option>
				</select>

				<p id="demo" class="text-muted lead"></p>

			</div>

			<div class="card">
				<div id="cardIcon" class="card-header">
					<span> Ruim.</span>
				</div>
			</div>
		</div>

		<div class="col-md-6 col-sm-12">
			<div class="form-group">
			  <p class="lead">Descreva um breve texto sobre sua opinião:</p>
			  <textarea class="form-control purple-border" id="textObservacoes" rows="5" placeholder="Ex.: Adorei o espaço, ótima decoração."></textarea>
			</div>

		</div>

	</div>
</div>


<!-- Rodapé  -->
<footer class="container-fluid bg-dark footer-pers mt-5 fixed-bottom">
	<div class="container py-5">
		<div class="row">
			<div class="col-md-4">
				<h5 class="text-light align-middle"><i class="fa fa-fw fa-archive"></i> Empresa</h5>

				<ul class="text-light">
					<li>
						<a href="#" class="text-light"><i class="fa fa-angle-right"></i> Novidades</a>
					</li>

					<li>
						<a href="#" class="text-light"><i class="fa fa-angle-right"></i> Sobre</a>
					</li>

					<li>
						<a href="#" class="text-light"><i class="fa fa-angle-right"></i> Emprego</a>
					</li>

					<li>
						<a href="#" class="text-light"><i class="fa fa-angle-right"></i> Mais informações</a>
					</li>

				</ul>

			</div>
		<div class="col-md-4">
			<h5 class="text-light"><i class="fa fa-fw fa-address-book"></i> Contato</h5>
			<ul>
			<li>
				<a href="https://www.facebook.com/Espa%C3%A7o-Encanto-Festas-195041077526528/?ref=br_rs" target="_blank" class="text-light"><img src="img/facebook.png" height="30" width="30"> Facebook</a>
			</li>
			<li>
				<a href="#" class="text-light"><img src="img/instagram.png" height="30" width="30"> instagram</a>
			</li>
			<li>
				<a href="#" class="text-light disable"><img src="img/twitter.png" height="30" width="30"> twitter em breve !</a>
			</li>
			</ul>
		</div>

		<div class="col-md-4">
			<h5 class="text-light align-middle"><i class="fa fa-fw fa-compass"></i> Localização</h5>
			<ul>
				<li><a href="#" class="text-light"><i class="fa fa-angle-right"></i> Como chegar</a></li>
				<li><a href="#" class="text-light"><i class="fa fa-angle-right"></i> Unidade planalto</a></li>
				<li><a href="#" class="text-light"><i class="fa fa-angle-right"></i> Unidade Guarani</a></li>
			</ul>

		</div>

	</div>
</div>
</footer>
						


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
	
function myFunction(){

	var x = document.getElementById("mySelect").value;
	document.getElementById("demo").innerHTML = "You avaliation: ";

	var i = 1;
	var intStar = x;

	for(i; i <= intStar; i++){
		var star = document.createElement("i");
		$(star).addClass("fa fa-fw fa-star text-warning");
		document.getElementById("demo").appendChild(star);
	}
	

}

</script>

</body>
</html>