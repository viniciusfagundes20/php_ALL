<?php 

include "./exemplo-01.php";

$db = new DB();

$id = 1;

if(!is_dir("./img/" . md5($id))){
	mkdir("./img/" . md5($id));
	echo "Diretorio criado com sucesso !";
}

$row = $db->getUsers($id);

var_dump($row);

?>