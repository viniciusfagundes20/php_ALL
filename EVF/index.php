<?php 

require_once("./core/config.php");
require_once("./vendor/autoload.php");
require_once("./configDB.php");

use Core\configController as home;

$object = new home();
$object->carregar();


?>