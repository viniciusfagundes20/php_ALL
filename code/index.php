<?php 

function generateRandomString($size = 6){
   $chars = "abcdefghijklmnopqrstuwxyz0123456789";
   $randomString = '';
   for($i = 0; $i < $size; $i = $i+1){
      $randomString .= $chars[mt_rand(0,34)];
   }
   return $randomString;
}

//echo generateRandomString();

?>
<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="utf-8">
	<title>PHP 7 - Gerador de código</title>
</head>
<body>
	<button type="button" onclick="base()">Gerar código</button>
</body>

<script type="text/javascript">

var code2 = "BMW-895"

var code;

function base(){

	var size = 6;

	var code = "";
	var caracteres = ['0','1','2','3','4','5','6','7','8','9','a','b','c','d','e','f','g','h','j','k','m','n','p','q','s','t','v','w','x','y','z'];

	var random;

	for (var i = 0; i <= size; i++) {
		
		random = Math.round(Math.random()* 31);
		random = Math.floor(random);

		if(random > 10){
			code += caracteres[random].toUpperCase();
		}else{
			code += caracteres[random];
		}

	}

	document.write(code);

}

</script>


<?php  

$var = '<script>document.write(code2)</script>';

var_dump($var);

?>

</html>