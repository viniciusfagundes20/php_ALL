<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>HTML 5</title>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>


	<script type="text/javascript">
		
		$(document).ready(function(){

			$("#btn_upload").click(function(){
				$("#img_carregamento").css({display: "block"});
			})

		});

	</script>

</head>
<body>

	<form method="POST" enctype="multipart/form-data">

		<input type="file" name="fileUpload">

		<button id="btn_upload" type="submit">Send</button>

		<div id="img_carregamento" style="display: none;">
			<img src="img/wait.gif">
		</div>
		
		

	</form>

</body>
</html>

<?php 

if($_SERVER["REQUEST_METHOD"] === "POST"){

	$file = $_FILES["fileUpload"];

	if($file["error"]){
		throw new Exception("Error: ocorreu um erro durante a operação de upload!");
	}

$dirUploads = "uploads";

if(!is_dir($dirUploads)){

	mkdir($dirUploads);

} 

if(move_uploaded_file($file["tmp_name"], $dirUploads. DIRECTORY_SEPARATOR . $file["name"])){

	echo "Upload realizado com sucesso !";

}else{
	throw new Exception("Error: Processing Request");
	
}


}

?>