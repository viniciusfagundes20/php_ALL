<?php 

$pessoa = array();

array_push($pessoa, array(
	"nome" => "Wender Costa",
	"idade" => "20",
	"cpf" => "03245478790",
));

echo json_encode($pessoa);

$json = '[{"nome":"Wender Costa","idade":"20","cpf":"03245478790"}]';

$data = json_decode($json, true);

var_dump($data);

?>