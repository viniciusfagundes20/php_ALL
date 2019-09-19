<?php

echo PHP_VERSION."<br>";
//define("BANCO_DADOS", ["127.0.0.1", "root", "password", "database"], TRUE="insentive");
define("BANCO_DADOS", ["127.0.0.1", "root", "password", "database"], TRUE);
print_r(BANCO_DADOS);


define("SERVIDOR", "localhost");
echo "<br>".SERVIDOR;

?>