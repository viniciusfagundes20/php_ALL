<?php 

session_start();
ob_start();

define('URL', 'http://localhost/Espaco_vanusa_fagundes/');
define('URLADM', 'http://localhost/Espaco_vanusa_fagundes//adm/');

define('CONTROLER', 'Home');
define('METODO', 'index');

/*/Credenciais de acesso ao BD

define("HOST", "sql306.epizy.com");
define("USER", "epiz_24473265");
define("PASS", "#XeHb7LzDH@%j4L");
define("DBNAME", "epiz_24473265_evf"); 
 */

define("HOST", "localhost");
define("USER", "root");
define("PASS", "");
define("DBNAME", "evf"); 

 ?>