<?php

session_start();

unset($_SESSION['usuario']);
unset($_SESSION['email']);
unset($_SESSION['id']);
unset($_SESSION['admin']);

session_destroy();

echo '<script type="text/javascript">var url = "https://espacoencantofestas.000webhostapp.com/index/index.php"; window.location.href = url;</script>';

?>
