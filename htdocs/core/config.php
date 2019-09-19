<?php 

session_start();
ob_start();


define('URL', 'http://localhost/htdocs/');
//define('URL', 'http://espacovanusafagundes.rf.gd/');
define('URLADM', 'http://espacovanusafagundes.rf.gd/adm/');

define('CONTROLER', 'Home');
define('METODO', 'index');

//Credenciais de acesso ao BD
/*
define("HOST", "sql306.epizy.com");
define("USER", "epiz_24473265");
define("PASS", "tgFoOYZMP4UbAUr");
define("DBNAME", "epiz_24473265_evf"); 

*/
define("HOST", "localhost");
define("USER", "root");
define("PASS", "");
define("DBNAME", "evf"); 


 ?>