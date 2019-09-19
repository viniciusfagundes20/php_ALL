<?php 

$text = nl2br("Estamos aprendendo PHP na UpInside. \n");

echo strtolower($text);
echo strtoupper($text);
echo ucfirst($text);
echo ucwords($text);

$string = htmlspecialchars("Olá <?php Hello World ?>");
echo $string;

?>