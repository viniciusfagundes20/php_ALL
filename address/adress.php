<?php

$x = isset($_GET["x"]) ? $_GET['x'] : 0;
$y = isset($_GET["y"]) ? $_GET['y'] : 0;

echo $x;
echo "<br>" . $y;




?>
<!DOCTYPE html>
<html>
<head>
	<title>Address</title>
</head>
<body>

<button id="btnAdrres" onclick="cadastrarAdress()">Validar</button>

<script>

function cadastrarAdress(){

if (navigator.geolocation) {
	navigator.geolocation.watchPosition(showPosition);
}else{
	x.innerHTML = "Geolocation is not supported by this browser.";  
}

function showPosition(position) {
  

  var addressX = position.coords.latitude;
  var addressY = position.coords.longitude;


  if(addressX != '<?= $x; ?>'){

  	alert("Sua localização atual não está de acordo !");
  	
  	var href = "index.php";
  	window.location.href = href;

  }else if(addressY != '<?= $y; ?>'){

  	alert("Sua localização atual não está de acordo !");
  	
  	var href = "index.php";
  	window.location.href = href;

  }else{

  	alert("Tudo ok!");

  }

 }
}

</script>

</body>
</html>