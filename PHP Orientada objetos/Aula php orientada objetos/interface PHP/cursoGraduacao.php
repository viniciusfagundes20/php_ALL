<?php 

class cursoGraduacao implements iCursos{

	public $nomeDis;
	public $nomeProf;

	public function disciplina($nomeDis){
		$this->nomeDis = $nomeDis;
		return $this->nomeDis;
	}

	public function professor($nomeProf){
		$this->nomeProf = $nomeProf;
		return $this->nomeProf;
	}


}

?>