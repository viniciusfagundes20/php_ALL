<?php 

session_start();

include "bd_class.php";

$ID = isset($_SESSION['id_usuario']) ? $_SESSION['id_usuario'] : 0;
$usuario = isset($_SESSION['usuario']) ? $_SESSION['usuario'] : 0;
$admin = isset($_SESSION['admin']) ? $_SESSION['admin'] : 0;

$bd = new bd;

$SQL = "SELECT CURSOS FROM REGISTROS WHERE ID = $ID;";
$QUERY = mysqli_query($bd->connection(), $SQL);
$data = mysqli_fetch_array($QUERY);

echo "ID: $ID".'<br>';



$test = explode(",", $data[0]);
$num = count($test);

echo "Numero total de cursos: $num";

?>