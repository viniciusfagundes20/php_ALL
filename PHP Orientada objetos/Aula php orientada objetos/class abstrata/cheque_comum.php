<?php 

class chequeComum extends cheque{

	public function calculaJuro(){

		$this->valor = $this->valor * 1.25;

		$this->valor = number_format($this->valor, 2);

		return "Juros total: ".$this->valor." // Tipo: ".$this->tipo;
	}

}

?>