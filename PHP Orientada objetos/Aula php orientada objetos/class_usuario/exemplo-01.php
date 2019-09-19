<?php

class usuario{

	public $nome;
	public $Email;

	function getDadosUser($nome, $Email){
		return "O usuário $nome tem o email -> $Email";
	}

}

?>