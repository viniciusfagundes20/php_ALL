<?php 

$frutas = array('abacate','maçã','mamão', 'banana');

var_dump($frutas);

foreach ($frutas as $value) {
	print "$value";
	print "<br />";
}



$name = "Vinicius";
print_r($name);

print "<br /> Estou aprendendo PHP 7 Profíssional ! <br />";

$cars = array("Volvo", "BMW", "Toyota", "Ford", "Fiat", "Honda", "BMX", "Caloi");

$arraySize = sizeof($cars);

echo "I like ";

foreach($cars as $key){
	
	echo $key;

	$arraySize--;

	if($arraySize == 0){
		echo ".";
		break;
	} 

	echo ", ";

}



?>