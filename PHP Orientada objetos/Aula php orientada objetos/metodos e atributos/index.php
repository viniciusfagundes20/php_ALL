<?php 

require "./exemplo-01.php";
$usuario = new usuario();

$usuario->setUsuario("vinicin");
echo "name: ".$usuario->getUsuario();

echo "<br>";

$usuario->setNote(5, 5);
echo "Média: ".$usuario->getMedia();

?>