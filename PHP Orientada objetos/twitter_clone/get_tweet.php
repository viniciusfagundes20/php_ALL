<?php

include "bd_class.php";

$id_usuario = isset($_SESSION['id_usuario']) ? $_SESSION['id_usuario'] : 0;

$tweetFULL = new bd;
$tweetFULL->get_tweet($id_usuario);


?>