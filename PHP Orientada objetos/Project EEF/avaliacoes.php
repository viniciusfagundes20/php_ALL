<?php 

include "bd_class.php";

$SQL = "SELECT * FROM AVALIACOES";

$BD = new bd;

$QUERY = mysqli_query($BD->connection(), $SQL);
$DATA = mysqli_fetch_array($QUERY);

print_r($DATA);


?>