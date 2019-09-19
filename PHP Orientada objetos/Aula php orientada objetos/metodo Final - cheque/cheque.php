<?php 
 
abastract class cheque{

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

	final function real($valor){
		return number_format($valor, "2", ",", ".");
	}

}

?>