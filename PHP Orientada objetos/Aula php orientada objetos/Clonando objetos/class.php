<?php 

class nota{
	public $aluno;
	public $prova;
	public $trabalho;
	public $disciplina;

public function setNota($prova, $trabalho){
	$this->prova = $prova;
	$this->trabalho = $trabalho;
}

public function setAluno($aluno){
	$this->aluno = $aluno;
}

public function setDisc($dis){
	$this->disciplina = $dis;
}

public function informacoes(){

	echo "Name: ".$this->aluno."<br>";
	echo "Test: ".$this->prova."<br>";
	echo "Work: ".$this->trabalho."<br>";
	echo "Discipline: ".$this->disciplina."<br>";

	echo "-----------------------------------<br>";
}

}

?>