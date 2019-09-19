<?php 

require "./classFuncionario.php";

$funcionario = new funcionario("Vinicius.Fagundes", 7800);

$teste = 5265925.5;

echo "R$ ".number_format($teste, 2, ",", ".");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP - method Public</title>

	<style type="text/css">
		p{
			font-size: 1rem;
		}
	</style>

</head>
<body>

<div>
	<p>
		<?= $funcionario->getSalario() ?>
	</p>
</div>

</body>
</html>