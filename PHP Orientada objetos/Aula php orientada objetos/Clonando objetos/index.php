<?php 

include "./class.php";

$info = new nota();

$info->setAluno("vinicius.fagundes");
$info->setNota(7, 4);
$info->setDisc("Português");

$info->informacoes();

$info2 = clone $info;
$info2->setNota(10, 8);
$info2->setDisc("Matemática");
$info2->informacoes();


$info3 = clone $info;
$info3->setNota(6, 7);
$info3->setDisc("História");
$info3->informacoes();

?>