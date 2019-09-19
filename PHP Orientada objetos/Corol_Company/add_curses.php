<?php 

session_start();
include "data.php";

if(empty($usuario) or $admin == 0){
	echo '<script type="text/javascript">var url = "./index.php?erro=1"; window.location.href = url;</script>';
}


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>HTML 5</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<div class="pb-2 mt-4 mb-2 border-bottom">
	<h3 style="display: block; color: #87CEFF; text-align: center;">Adicionar curso</h3>
</div>

<div class="container" style="display: block; margin-top: 50px;">
<form action="" method="POST">
  <div class="form-group">
    <label for="exampleFormControlInput1">Nome curso: </label>
    <input id="nameCurse" type="text" class="form-control" id="exampleFormControlInput1" placeholder="nameCurse">
  </div>
  <div class="form-group">
    <label for="background">background: </label>
    <input type="file" class="form-control-file" id="background">
  </div>
  <div class="form-group">
    <label for="detalhesCurso">Detalhes cursos: </label>
    <textarea class="form-control" id="detalhesCurso" rows="3"></textarea>
  </div>
  <div class="form-group">
  	 <label for="dinheiro">Valor R$</label>
  	 <input type="text" id="dinheiro" name="dinheiro" class="dinheiro form-control" style="display:inline-block" />
  </div>
  <div class="form-group">
  	<button type="submit" class="btn btn-primary btn-lg">Publicar</button>
  </div>
</form>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>

<script type="text/javascript">
	$('.dinheiro').mask('#.##0,00', {reverse: true});
</script>

</body>
</html>