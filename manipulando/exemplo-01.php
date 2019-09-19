<?php 

$name = "images";

$data = array();

if(!is_dir($name)){

	mkdir($name);
	echo "Diretorio foi criado com sucesso.";

}else{

	echo nl2br("Diretório já existente !\n");

}

$img = scandir("images");

foreach($img as $value){
    if(!in_array($value, array(".", ".."))){
        
        $fileName = "images" . DIRECTORY_SEPARATOR . $value;
        
        $info = pathinfo($fileName);
        
        $info["size"] = filesize($fileName);
        $info["modified"] = date("d/m/Y : H:i:s", filemtime($fileName));
        $info["url"] = "http://localhost/manipulando/" . str_replace("\\", "/", $fileName);
        
        
        
        array_push($data, $info);
        
    }
}

echo json_encode($data);


?>