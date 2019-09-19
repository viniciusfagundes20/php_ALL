<?php

session_start();

unset($_SESSION['usuario']);
unset($_SESSION['email']);


?>

<script src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript">

	$(document).ready(function(){
		var novaURL = "index.php";
		$(window.document.location).attr('href',novaURL);

	})

</script>