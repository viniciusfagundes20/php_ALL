
<form method="POST" enctype="multipart/form-data">
	
	<input type="file" name="fileUpload">
	<button type="submit">Send</button>

</form>
<?php 

include "./exemplo-01.php";

$id = 4;
$dirUpload = "img" . DIRECTORY_SEPARATOR . "users";

if($_SERVER["REQUEST_METHOD"] === "POST"){

	$file = $_FILES["fileUpload"];

	if($file["error"]){
		throw new Exception("Error: " . $file["error"]);
	}

	if(!is_dir($dirUpload . DIRECTORY_SEPARATOR . $id)) mkdir($dirUpload . DIRECTORY_SEPARATOR . $id);
	

	if(move_uploaded_file($file["tmp_name"], $dirUpload . DIRECTORY_SEPARATOR . $id . DIRECTORY_SEPARATOR . $file["name"])){

		echo "Upload realizado com sucesso !<br>";

	} else {

		throw new Exception("Ocorreu algum error durante a operação.");
		

	}

	$hospedado = $file["name"];


	function getImg($img, $id){

		$db = new DB();

		$user = $id;
		$str = $img;

		$SQL = "UPDATE users SET img = '$str' WHERE users.ID = $user";

		$stmt = $db->GetConn()->prepare($SQL);

		//$stmt->bindParam(":img", $str, PDO::PARAM_STR);
		//$stmt->bindParam(":id", $user, PDO::PARAM_INT);

		$stmt->execute();

		
	}

	getImg($hospedado, $id);


}

?>