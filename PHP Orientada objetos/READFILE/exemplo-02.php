<?php 

$filename = "background.jpg";

$base = base64_encode(file_get_contents($filename));

$fileinfo = new finfo(FILEINFO_MIME_TYPE);

$minetype = $fileinfo->file($filename);

$base64encode =  "data:". $minetype .";base64,". $base;

?>


<!DOCTYPE html>
<html>
<head>
	<title>HTML 5</title>
</head>
<body background="<?=$base64encode?>">

	<a href="<?=$base64encode?>">Link para imagem</a>

</body>
</html>