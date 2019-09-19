<?php 
 
abstract class cheque{

	public $valor;
	public $tipo;

	function __construct($valor, $tipo){
		$this->valor = $valor;
		$this->tipo = $tipo;
	}

	abstract function calcularJuros();

	function getValue(){
		return $this->valor;
	}

	function getTipo(){
		return $this->tipo;
	}

}

?>