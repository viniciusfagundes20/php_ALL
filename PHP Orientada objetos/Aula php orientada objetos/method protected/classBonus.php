<?php 

class bonus extends funcionario{

	public function verSalario($bonus){
		parent::bonus($bonus);
		return parent::getSalario();
	}

}

?>