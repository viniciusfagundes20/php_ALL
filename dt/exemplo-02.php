<?php 

$dt = new DateTime();

$periodo = new DateInterval("P1D");

echo $dt->format("d/m/Y") . "<br>";

$dt->add($periodo);

echo $dt->format("d/m/Y");

?>