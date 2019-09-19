<?php 

include "./vendor/autoload.php";

use core\configController as home;

$url = new home();

$url->carregar();
$url->carregarBlog();


?>