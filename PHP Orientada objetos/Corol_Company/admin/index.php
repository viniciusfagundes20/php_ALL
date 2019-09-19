<?php

session_start();

$usuario = isset($_SESSION['usuario']) ? $_SESSION['usuario'] : 0;
if(!$usuario){
	//echo '<script type="text/javascript">var url="http://localhost/Corol%20Company/"; window.location.href = url;</script>';
}

include "bd_class.php";
$bd = new bd;

$sql = 'SELECT * FROM CURSOS';
$query = mysqli_query($bd->connection(), $sql);

//class ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Corol Company</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>



<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container">
  <a class="navbar-brand" href="#">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Administrador
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Adicionar curso</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Procurar por usuários</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" method="POST">
      <input id="text_busca" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button id="btn_search" class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
  </div>
</nav>

<!--navbar /-->


 <!--corpo-->

	<div class="row">
		<div class="col-md-12">
			<table class="table table-bordered table-dark">
				<thead>
			    <tr>
			      <th scope="col">#ID</th>
			      <th scope="col">Curso</th>
			      <th scope="col">Detalhes</th>
			      <th scope="col">Valor</th>
			      <th scope="col">Imagem</th>
			       <th scope="col">Data</th>
			       <th scope="col">Editar</th>
			    </tr>
			  </thead>
			  <tbody>
			<?php while($dado = $query->fetch_array()){ ?>
				<tr>
					<th><?php echo $dado["ID"]; ?></th>
					<th><?php echo $dado["CURSO"]; ?></th>
					<th><?php echo $dado["POSTADO"]; ?></th>
					<th><?php echo $dado["PRECO"]; ?></th>
					<th><?php echo '<a href="'.$dado["IMG"].'">'. $dado["IMG"] .'</a>'; ?></th>
					<th><?php echo date("d/m/Y", strtotime($dado["REGISTRADO"])); ?></th>
					<th></th>
				</tr>
			<?php } ?>
			</tbody>
			</table>
		</div>
	</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){

		$('#btn_search').click(function(){
			if(!$("#text_busca").val()){
				return false;
			}
		})
		

	});
</script>


</body>
</html>