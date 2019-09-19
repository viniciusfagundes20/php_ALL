<?php 

$dataTime = date("d/m/Y : H:i:s");

echo $dataTime . '<br>';

$data = strtotime("01-07-2019");

echo date("d/m/Y",  $data);

?>