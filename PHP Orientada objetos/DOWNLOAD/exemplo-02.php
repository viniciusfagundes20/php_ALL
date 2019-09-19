<?php 

$link = "https://png.pngtree.com/thumb_back/fw800/back_pic/03/56/96/20579f52e07d758.jpg";

$content = file_get_contents($link);

$parse = parse_url($link);

$base = basename($parse["path"]);

$file = fopen($base, "w+");

fwrite($file, $content);

fclose($file);

?>

<!DOCTYPE html>
<html lang="pt-bt">
<head>
	<meta charset="utf-8">
	<title>HTML 5</title>

<script type="text/javascript">
	
	var name = document.getElementById("nameInput");

</script>

</head>
<body>

<div style="height: 100%; width: 100%;">
	<img src="<?=$base?>" width="100%" height="100%">
</div>

<div style="border: 1px solid #000; margin-top: 10px;">
	<span>Name user: </span>
	<input type="text" name="nameInput" id="nameInput">
	<button style="display: block; margin-top: 5px; text-align: center;" type="button">
		<span>Send</span>
	</button>
</div>

</body>
</html>