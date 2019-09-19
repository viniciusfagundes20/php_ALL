<?php 

class classPDO extends PDO{

	private $object = null;

public function __construct(){
	$this->object = new PDO("mysql:host=localhost;dbname=PDO", "root", "");
	echo $this->getDate(). ": iniciada conexão ao banco de dados! <br>";
}


public function close(){
	$this->object = null;
	echo $this->getDate(). ": Encerrada conexão ao banco de dados!<br/>";
}


public function setArray($sql, $data = array()){

	$this->object->beginTransaction();

	$stms = $this->object->prepare($sql);

	$stms->execute($data);

	if($this->object->commit()){
		echo $this->getDate(). ": SQL successfully!"."<br/>";
		$this->close();
	}

}


public function query($sql, array $data = null){

	$this->object->beginTransaction();

	$stms = $this->object->prepare($sql);

	$stms->execute($data);

	if($this->object->commit()){
		echo $this->getDate(). ": Query executada com sucesso!<br>";
		$this->close();
	}else{
		$this->object->rollback();
		echo $this->getDate(). ": Ocorreu algum error inesperado!";
	}	
}

public function getDate(){
	
	$dt = new DateTime();
	/*/$pr = new DateInterval("P15D");

	echo $dt->format("d/m/Y H:i:s") . '<br />';

	$dt->add($pr);

	echo $dt->format("d/m/Y H:i:s") . '<br />';
	*/

	$timeStamp = $dt->format("Y/m/d H:i:s");

	return date("d/m/Y H:i", strtotime($timeStamp));

	}
}

$objectPDO = new classPDO();
$data = array("vanusa.fagundes");
$sql = "DELETE FROM tb_users WHERE nome = ?";
$objectPDO->setArray($sql, $data);


?>