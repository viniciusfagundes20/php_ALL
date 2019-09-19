<?php 

$json = '[{"nome":"glaucio","idade":25}]';

$data = json_decode($json, TRUE);

var_dump($data);


?>