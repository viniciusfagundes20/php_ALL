<?php 

class clientFisico extends client{

	public $cpf;
	public $nome;

	public function setCpf($cpf){
		$this->cpf = $cpf;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}


	public function informacoes(){
		return $this->bairro;
	}

} 

?>