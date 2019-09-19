<?php

$name = "img";

//issdir -> verifica existência;
if(!is_dir($name)){
	mkdir($name);
}else{
	echo "Diretório já existente: ./$name<br>";
}


?>