<!DOCTYPE html>
<html>
<body>

<p id="demo">Clique no botão para receber as coordenadas:</p>
<button onclick="getLocation()">Clique Aqui</button>

<script>

	var x = document.getElementById("demo");

	var addressX= "nota asdhashd";	var addressY;

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.watchPosition(showPosition);
  } else {
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}
function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;

  addressX = position.coords.latitude;
  addressY = position.coords.longitude;

  var k = "./adress.php?x=" + addressX + "&y=" + addressY;

  window.location.href = k;


}

</script>
</body>
</html>