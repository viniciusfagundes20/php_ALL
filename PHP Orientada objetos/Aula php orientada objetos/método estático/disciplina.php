<?php 

class disciplina{
	public $aluno;
	public $notaTrabalho;
	public $notaProva;
	public static $media;


	public function __construct($aluno, $notaT, $notaP){

		$this->aluno = $aluno;
		$this->notaTrabalho = $notaT;
		$this->notaProva = $notaP;

		self::$media = ($notaP + $notaT) / 2;

	}

	public function situacao(){
			if(self::$media >= 6){
				return "O aluno $this->aluno está aprovado !";
			}else{
				return "O aluno $this->aluno se encontra retido com média de ".self::$media.'.';
			}

		}

	static function situation(){
		if(self::$media >= 6){
				return "O aluno está aprovado com média de ".self::$media.' pontos.';
			}else{
				return "O aluno se encontra retido com média de ".self::$media.'.';
			}
	}


};

?>