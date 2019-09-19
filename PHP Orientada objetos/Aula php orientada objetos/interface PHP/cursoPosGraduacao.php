<?php 

class cursoPosGraduacao implements iCursos{

	public $nomeDis;
	public $nomeProf;

	public function disciplina($nomeDis){
		$this->nomeDis = $nomeDis;
		return $this->nomeDis;

	}

	public function professor($nome){
		$this->nomeProf = $nome;
		return $this->nomeProf;
	}


}

?>