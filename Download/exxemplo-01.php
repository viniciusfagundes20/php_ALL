<?php 

$link = "https://i.pinimg.com/originals/de/f6/96/def69643889ee29e232637646e839064.jpg";

$contents = base64_encode(file_get_contents($link));

var_dump($contents);

$base64 = "data:;base64," . $contents;

?>

<img src="<?= $base64 ?>" width="100%" height="500">
dlasd