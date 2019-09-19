<?php 

include "sql.php";

sleep(1);

$obj = new sql();
$result = $obj->select("SELECT user FROM tb_agenda");

$obj->closeServer();

/* echo "<table border='1'><tr>";

foreach ($result as $key) {
    
   extract($key);

   echo "<td>" . $user . "</td>";

}

echo "</tr></table>";*/

echo "1";