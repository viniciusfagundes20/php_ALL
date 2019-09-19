<?php

$image = imagecreatefrompng("./img/twitter.png");

$titleColor = imagecolorallocate($image, 255, 255, 255);
$gray = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5, 450, 150, "Certificado", $gray);

header("Content-Type: image/png");

imagepng($image);
imagedestroy($image);

?>