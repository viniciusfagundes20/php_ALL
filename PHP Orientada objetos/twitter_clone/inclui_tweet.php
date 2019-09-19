<?php

session_start(); 
if(!isset($_SESSION['usuario'])) header('location: index.php?erro=1'); 

include "bd_class.php";


$id_usuario = $_SESSION['id_usuario'];
$tweet = $_POST['tx_tweet'];

$tweetFULL = new bd;
$tweetFULL->inserir_tweet($id_usuario, $tweet);


?>