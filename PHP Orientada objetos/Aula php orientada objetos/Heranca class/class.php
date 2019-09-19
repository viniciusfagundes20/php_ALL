<?php 

class client{

	public $endereco;
	public $bairro;

	public function setEndereco($end){
		$this->endereco = $end;
	}

	public function setBairro($bairro){
		$this->bairro = $bairro;
	}

	public function getEndereco(){
		return $this->endereco;
	}

	public function getBairro(){
		return $this->bairro;
	}

}


?>