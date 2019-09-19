<?php

include "vendor/autoload.php";
include "config.php";


$object = new \teste\models\helper\StsRead();
$object->fullRead("SELECT * FROM sts_artigos");

print_r($object->getResultado());
