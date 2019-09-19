<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="utf-8">
	<title>HTML 5</title>
</head>
<body>

<?php 

require "./exemplo-01.php";

$usuario = new usuario();
echo $usuario->getDadosUser("Vinicin", "vinicinpointb4nd@gmail.com");


?>

</body>
</html>