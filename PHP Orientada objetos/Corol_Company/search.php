<?php

session_start();
include "bd_class.php";

$GET = isset($_GET["search"]) ? : 0;

if(empty($_GET["search"])) echo '<script type="text/javascript">var url = "./index.php"; window.location.href = url;</script>';

else{
  
  $bd = new bd;
  $search = $_GET["search"];

  $SQL = "SELECT * FROM CURSOS WHERE CURSO LIKE '%$search%' ORDER BY ID ASC";
  $QUERY = mysqli_query($bd->connection(), $SQL);
}

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Corol company - <?= $search ?></title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">	
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container">
	<div class="pb-2 mt-4 mb-2 border-bottom">
		<h2 style="text-align: center;">Cursos relevantes</h3>
	</div>
	

	<div class="row">
    <?php while($dado = $QUERY->fetch_array()) { ?>
      <div class="col-md-4 pb-2 mt-4 mb-2 border-bottom border-top border-left border-right" style="heigth:100px;">
        <div class="container">
        <?php echo '<img src="'.$dado['IMG'].'" heigth="100" width="100%">'; ?>
        <h4 style="text-align: center;"><?= $dado["CURSO"] ?></h4>
        <h3 style="text-align: center;"><?= number_format($dado["PRECO"], 2)."$" ?></h3>
        <?= '<button id="'. $dado['ID'] .'" class="btn btn-default btn-more">+Obter curso</button>' ?>
        <span id="span_descont" style="display: block;"></span>
        </div>
      </div>
    <?php } ?>
  </div>

</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script type="text/javascript">
  
  $('.btn-more').click(function(){
    var id = this.id;
    window.location.href = "more.php?id=" + id;
  })
  
</script>

</body>
</html>