<?php 

session_start();
ob_start();

define('URL', 'http://espacovanusafagundes.ueuo.com/');
define('URLADM', 'http://espacovanusafagundes.ueuo.com/adm/');

define('CONTROLER', 'Home');
define('METODO', 'index');

//Credenciais de acesso ao BD
define("HOST", "localhost");
define("USER", "root");
define("PASS", "");
define("DBNAME", "evf");

 ?>