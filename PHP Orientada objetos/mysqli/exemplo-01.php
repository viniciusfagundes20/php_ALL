<?php 

$conn = new mysqli("localhost", "root","", "twitter_clone");

if($conn->connect_error){
	echo "Error: ". $conn->connect_error;
}




?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>HTML 5</title>
</head>
<body>

	<div>
		<table>
		<?php
		$row = $conn->query("SELECT * FROM USUARIO");
		while($i = $row->fetch_array()){
			echo $i["USUARIO"]."<br />";
		} ?>
		</table>
	</div>

</body>
</html>