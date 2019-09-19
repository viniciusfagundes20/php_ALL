<?php 

setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

$dt = new DateTime();

echo $dt->format("d/m/Y H:i:s");


?>