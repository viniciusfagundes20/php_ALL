<?php 

//const

define("URL", "http://localhost/array/exemplo-03.php");
define("SERVIDOR", "localhost");

define("DB", [
	"servidor" => "localhost",
	"user" => "root",
	"pass" => "pass",
	"Dbname" => "DBPDO"
], true);

echo URL . "<br>";

var_dump(DB);

?>