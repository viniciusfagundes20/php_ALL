<?php
session_start();
ob_start();

setlocale(LC_TIME, 'pt');

define('URL', 'http://localhost/EVF/');
define('URLADM', 'http://localhost/EVF/adm/');

define('CONTROLER', 'Home');
define('METODO', 'index');

//Credenciais de acesso ao BD
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBNAME', 'evf');

?>