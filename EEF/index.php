<?php
    require './vendor/autoload.php';
    require './core/config.php';
 

    use core\ConfigController as Home;
    $Url = new Home();
    $Url->carregar();
 
?>
