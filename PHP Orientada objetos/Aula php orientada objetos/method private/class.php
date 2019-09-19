<?php 

class funcionario{
	
	public $nome;
	private $salario;


	/* public function __construct($nome, $salario){
		$this->nome = $nome;
		
	} */

	public function setSalario($salario){
		$this->salario = $salario;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getSalario(){

		$this->salario = $this->validarSalario($this->salario);

		return "O funcionario $this->nome tem o salário de ".$this->salario."U$ liquído.";
	}

	private function validarSalario($salario){
		if(is_numeric($salario) and ($salario > 0)):
			return $this->salario = number_format($salario, '2', '.', '.');
		else:
			die("Salário inválido.");
		endif;
	}


};

?>