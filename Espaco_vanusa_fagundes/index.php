<?php 

require_once("core/config.php");
require_once("vendor/autoload.php");

$object = new \Core\ConfigController();
$object->carregar();

?>