<?php 

include "./exemplo-01.php";

function getInfo($id){

	$SQL = "SELECT * FROM users WHERE ID = :id";

	$db = new DB();

	$stmt = $db->GetConn()->prepare($SQL);
	$stmt->bindParam(":id", $id, PDO::PARAM_INT);

	$stmt->execute();

	$data = $stmt->fetchAll();

	return $data;

}

$info = getInfo(1);
$info = $info[0];

$link = "http://localhost/DIR/img/users/" . $info["ID"] . "/" . $info["img"];

$content = base64_encode(file_get_contents($link));

$base = "data:;base64," . $content;

?>
<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="utf-8">
	<title>Foro</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

</head>
<body>
	<div class="navbar navbar-expand-lg bg-dark">
	
	<img id="img" src="<?= $base ?>" height="50" width="70" class="rounded-circle" onclick="displayT();"><span class="lead text-light"><?= "@" . $info["nome"] . "_" . $info["ID"] ?></span>

</div>

<div id="panel" style="display: none;" class="container">
		<a href="#" style="display: block;">Messagens</a>
		<a href="#" style="display: block;">Alertas</a>
		<a href="#" style="display: block">Logout</a>
</div>

</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

<script type="text/javascript">

function displayT(){

	var display = document.getElementById("panel").style.display;

    if(display == "none")
        document.getElementById("panel").style.display = 'block';
    else
        document.getElementById("panel").style.display = 'none';
    }	

</script>

</html>
