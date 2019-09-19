<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="utf-8">
	<title>Metódos e atributos - PHP</title>
</head>
<body>

<?php 

class usuario{
	public $name;
	public $email;
	public $prova;
	public $trabalho;

	public function setUsuario($name){
		$this->name = $name;
	} 

	public function getUsuario(){
		return $this->name;
	}

	public function setNote($prova, $trabalho){
		$this->prova = $prova;
		$this->trabalho = $trabalho;
	}

	public function getMedia(){

		return ($this->prova + $this->trabalho) / 2;

	}

}

?>

</body>
</html>