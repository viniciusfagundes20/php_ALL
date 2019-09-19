<?php 

class usuario{

private $idusuario;
private $deslogin;
private $desseenha;
private $dtcadastro;

public function getIdusuario(){
	return $this->idusuario;
}

public function setIdusuario($value){
	$this->idusuario = $value;
}

public function getDeslogin(){
	return $this->deslogin;
}

public function setDeslogin($value){
	$this->deslogin = $value;
}

public function getDesseenha(){
	return $this->desseenha;
}

public function setDesseenha($value){
	$this->desseenha = $value;
}

public function getDtcadastro(){
	return $this->dtcadastro;
}

public function setDtcadastro($value){
	$this->dtcadastro = $value;
}


public function loadById($id){

	$sql = new sql();
	$result = $sql->select("SELECT * FROM tb_users WHERE id = :ID", array(":ID" => $id));

	if(!empty($result)){

		$this->setData($result[0]);

	}

}

public static function getList(){

	$sql = new sql();
	return $sql->select("SELECT * FROM tb_users ORDER BY id");

}

public static function search($deslogin){

	$sql = new sql();

	return $sql->select("SELECT * FROM tb_users WHERE nome LIKE :SEARCH ORDER BY id", array(
		':SEARCH' => '%'.$deslogin.'%'
	));

}

public function login($deslogin, $dessenha){

$sql = new sql();
	$result = $sql->select("SELECT * FROM tb_users WHERE nome = :DESLOGIN AND senha = :DESSENHA", array(
		':DESLOGIN' => $deslogin,
		':DESSENHA' => $dessenha
	));

	if(!empty($result)){

		$this->setData($result[0]);

	}else{

		throw new Exception("Login ou senha inválidos!");
		

	}

}

public function setData($data){

$this->setIdusuario($data['id']);
		$this->setDeslogin($data['nome']);
		$this->setDesseenha($data['senha']);
		$this->setDtcadastro(date('Y-m-d H:i:s', strtotime($data['created'])));

}

public function insert($DESLOGIN, $DESSENHA){

$query = "INSERT INTO tb_users(nome, senha, created) VALUES (:NOME, :SENHA, :CREATED); SELECT last_insert_id();";

$data = array(
	':NOME' => $DESLOGIN,
	':SENHA' => md5($DESSENHA),
	':CREATED' => date('Y-m-d H:i:s')
);

$deslogin = new sql();
$deslogin = $deslogin->insert($query, $data);

if($deslogin != 0){
	echo "Usuário registrado com sucesso!<br/>";
	$this->loadById($deslogin);
}

}

public function update($DESLOGIN, $DESSENHA, $ID){

	$sql = new sql();

	$sql->query("UPDATE tb_users SET nome = :DESLOGIN, senha = :DESSENHA, modified = :MODIFIED WHERE id = :ID", array(
		':DESLOGIN' => $DESLOGIN,
		':DESSENHA' => md5($DESSENHA),
		':MODIFIED' => date('Y-m-d H:i:s'),
		':ID' => $ID
	));

	echo "Dados alterados com sucesso!<br/>";
	$this->loadById($ID);

}

public function delete($ID){
	
	$sql = new sql();
	$sql->query("DELETE FROM tb_users WHERE id = :ID", array(
		':ID' => $ID
	));

	$this->setIdusuario(0);
	$this->setDeslogin('');
	$this->setDesseenha('');
	$this->setdtcadastro(date('Y-m-d H:i:s'));

	return "Dados excluídos com sucesso!<br/>";

}


public function __toString(){

	return json_encode(array(
		"idusuario" => $this->getIdusuario(),
		"deslogin" => $this->getDeslogin(),
		"desseenha" => $this->getDesseenha(),
		"dtcadastro" => date("d-m-Y H:i:s", strtotime($this->getDtcadastro()))
	));

}


}


 ?>