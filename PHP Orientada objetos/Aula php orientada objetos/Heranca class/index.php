<?php 

require "./class.php";
require "./clientFisico.php";

$client = new client();
$client->setEndereco("Av. Dr Cristiano Guimarões");
$client->setBairro("Planalto");

$clientPF = new clientFisico();
$clientPF->setCpf('022.438.766-98');
$clientPF->setNome("Vinicius.Fagundes");
$clientPF->setBairro("Jardim dos guaras");

$clientPF->setEndereco("Rua elaney, Jardim comerciários");

echo $clientPF->informacoes();

?>
<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="utf-8">
	<title>Herança PHP</title>
</head>
<body>

<div>
	<p>
		<?= $client->getEndereco().", ".$client->getBairro()."."; ?>
	</p>
</div>

</body>
</html>