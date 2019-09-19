<?php  


//array_sum — Calcula a soma dos elementos de um array
function soma(float ...$valores):float{
	return array_sum($valores);
}

echo soma(1.1, 2.4, 3.8);

?>