<?php 

require_once("config.php");

 ?>

<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="utf-8">
	<title>Inserindo usuário</title>
</head>
<body>

<?php 

$root = new usuario();
$root->update("Iago_gomez", "1234", 3);

echo $root;

 ?>

</body>
</html>