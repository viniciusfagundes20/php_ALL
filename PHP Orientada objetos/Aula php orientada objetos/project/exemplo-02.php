<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="utf-8">
	<title>HTML 5</title>
</head>
<body>

<?php 

if(phpversion() >= 7.0) echo phpversion()." Olá mundo !";
else echo "Necessário atualização !";

echo "<hr>";
echo ini_get('date.timezone').'<br>';
echo date("d/m/Y H:i:s").'<br>';

?>

</body>
</html>