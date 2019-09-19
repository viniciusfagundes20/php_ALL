<?php 

$handle = fopen('log.ini', 'a+');

fwrite($handle, date("Y-m-d H:i:s") . "\n");

fclose($handle);

echo "ready Ok";


 ?>