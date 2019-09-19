<?php 

class funcionario{
	
	public $nome;
	private $salario;

	protected $bonus;


	/* public function __construct($nome, $salario){
		$this->nome = $nome;
		
	} */

	public function setBonus($bonus){
		$this->bonus = $bonus;
	}

	public function setSalario($salario){
		$this->salario = $salario;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getSalario(){

		$this->salario = $this->validarSalario($this->salario);

		return "O funcionario $this->nome tem o salário de ".$this->salario."R$ liquído com bonus de ".$this->validarBonus($this->bonus)."R$ em benefícios.";
	}

	private function validarSalario($salario){
		if(is_numeric($salario) and ($salario > 0)):
			return $this->salario = number_format($salario, '2', '.', '.');
		else:
			die("Salário inválido.");
		endif;
	}

	private function validarBonus($bonus){

		if(is_numeric($bonus) and ($bonus > 0))
			return $this->bonus = number_format($bonus, 2, ",", ".");

	}

	protected function bonus($bonus){
		$this->bonus = $bonus;
	}


};

?>