<?php  

include "config.php";
//limpar a variável
//session_unset($_SESSION["nome"]);

session_destroy($_SESSION);

echo $_SESSION["nome"];


?>