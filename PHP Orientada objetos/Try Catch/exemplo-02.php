<?php 

function trataNome($name){

	if(!$name){
		throw new Exception("Nenhum nome foi informado.<br />", 1);
		
	}

	echo ucfirst($name)."<br />";
}

try {
		
		trataNome("joao");
		trataNome("");

	} catch (Exception $e) {
		
		print $e->getMessage();

	}finally{

		print "Executado o TRY !";

};


?>