<?php 

include "./class.php";

$fun = new funcionario();

$fun->setNome("vinicius.fagundes");
$fun->setSalario(7500);

echo $fun->getSalario();

?>