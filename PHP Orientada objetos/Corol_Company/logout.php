<?php

session_start();

unset($_SESSION['usuario']);
unset($_SESSION['email']);
unset($_SESSION['id']);
unset($_SESSION['admin']);

setcookie("f56441d95028a3310996349dcc3948cx");
setcookie("d56441f95028a331b996349dcb3948e6");

session_destroy();

?>

<script type="text/javascript">
	var url = "index.php";
	window.location.href = url;
</script>
