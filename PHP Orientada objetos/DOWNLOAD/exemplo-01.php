<?php 

$link = "./arquivos/01.jpg";

$content = file_get_contents($link);

$parse = parse_url($link);

$basename = (basename($parse["path"]));

$file = fopen($basename, "w+");

fwrite($file, $content);
fclose($file);

?>

<img src="<?= $basename ?>"> 