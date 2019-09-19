<?php

session_start();
include "bd_class.php";

$GET = isset($_GET["id"]) ? : 0;

if(empty($GET)){
	echo '<script type="text/javascript">var url = "./index.php"; window.location.href = url;</script>';
}else{
	$GET = $_GET['id'];
}

$bd = new bd;
$sql = "SELECT * FROM CURSOS WHERE ID = $GET";
$query = mysqli_query($bd->connection(), $sql);
$data = mysqli_fetch_array($query);


if(!empty($data["DESCONTO"])){
	
	$valor = $data["PRECO"];
	$DESCONTO = $data["DESCONTO"];
	$DESCONTO = $valor * $DESCONTO / 100;
	$valor = $valor - $DESCONTO;
}

function proximo($id){
  $id++;
  $var = "./more.php?id=".$id;

  return $var;
}

function anterior($id){
  $id--;
  $var = "./more.php?id=".$id;

  if(empty(verificar($id, 0))){
    $var = "#";
  }

  return $var;
}

function verificar($idAtual, $direcao){

$bd = new bd;

if(!$direcao){
  $idAtual--;
}else{
  $idAtual++;
}
 
$sql = "SELECT ID FROM CURSOS WHERE ID = $idAtual";
$query = mysqli_query($bd->connection(), $sql);
$data = mysqli_fetch_array($query);

if(empty($data["ID"])){
  return false;
}

return true;


} 



?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Corol company - More</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
           <li class="nav-item active">
              <a class="nav-link" href="./index.php">Home <span class="sr-only">(current)</span></a>
          </li>
         <ul class="navbar-nav mr-auto">
            <li class="nav-item">
            <a class="nav-link" href="<?= anterior($GET); ?>">Anterior</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= proximo($GET); ?>">Próximo</a>
          </li>
          </ul>
    </div>
  </nav>
      
  </div>
</nav>

<div class="row">
	<div class="col-md-12">
		<?= '<img src="'. $data['BACKGROUND'] .'" class="img-fluid" width="100%" height="250">' ?>
	</div>
</div>

<div class="container" style="margin-top: 150px;">
<div class="row">
	<div class="col-md-8">
		<h3>Detalhes:</h3>
		<p><?= $data['DETALHES'] ?></p>
	</div>
	<div class="col-md-4">
	<div class="jumbotron">
  		<h3>Preço: </h3>
  		<img class="img-fluid" src="img/site_seguro_verde.png" height="50" width="100" style="float: right">
  		<?php if(isset($valor)) { ?>
  			<strike><?= number_format($data["PRECO"], 2)."$" ?></strike><br />
  			<span><?= number_format($valor, 2)."$" ?></span><br />
  			<span style="color: red;"><?= $data["DESCONTO"]. "% OFF" ?></span>
  		<?php }else { ?>
  			<h3 class="dinheiro"><?= number_format($data["PRECO"], 2) ?></h3>
  		<?php } ?>
  		<br>
  		<a class="btn btn-primary btn-lg" href="#" role="button" style="margin-top: 25px; margin-left: 10px">Comprar agora</a>
  		<br>
	</div>
	</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


</body>
</html>