<?php 

include "./class.php";
include "./classBonus.php";

$fun = new bonus();

$fun->setNome("vinicius.fagundes");
$fun->setSalario(7500);

echo $fun->verSalario(2500);

?>