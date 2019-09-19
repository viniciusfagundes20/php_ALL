<?php

session_start();

class bd{

	private $user = 'root';
	private $password = '';
	private $host = 'localhost';
	private $database = 'twitter_clone';
	

	private function conectMysql(){

		$con = mysqli_connect($this->host, $this->user, $this->password) or die(mysql_error());
		mysqli_select_db($con, $this->database);
		mysqli_set_charset($con,'utf8');

		if($con){
			return $con;
		}
		
		echo "Error ao conectar ao servidor: ".mysql_error();
		return false;
		

	}

	public function consultaLogin($usuario, $senha){

		$sql = "SELECT * FROM usuario WHERE usuario = '$usuario' and senha = '$senha'";

		$resultID = mysqli_query($this->conectMysql(), $sql);

		if($resultID){

			$data = mysqli_fetch_array($resultID);
			
			if(isset($data['usuario'])){

				$_SESSION['usuario'] = $data['usuario'];
				$_SESSION['email'] = $data['email'];
				$_SESSION['id_usuario'] = $data['id'];

				header("location: home.php");
			}else{
				header("location: index.php?erro=1");
			}

		}else{
			echo "Error na operação !";
		}

	}


 	public function inserir($nome, $email, $senha){

 		$sql = "INSERT INTO usuario(usuario, email, senha) VALUES('$nome', '$email', '$senha')";
 		$sqlConsulta = "SELECT * FROM usuario WHERE usuario = '$nome'";

 		$usuarioExiste = mysqli_query($this->conectMysql(), $sqlConsulta);
 		

 		if($usuarioExiste){
 			$data = mysqli_fetch_array($usuarioExiste);
 			if(isset($data['usuario'])){
 				header("location: inscrevase.php?erro=2");
 				return false;
 			}


 		}


 		//caso não exista, insira novo usuário

 		$returnSQL = mysqli_query($this->conectMysql(), $sql);
 	
 		if($returnSQL){
 			header("location: index.php?cadastrado=1");
 		}else{
 			echo "Error: ".mysql_error();
 		}

 	}

 	public function inserir_tweet($usuario, $tweet){

 		$sql = "INSERT INTO tweet(id_usuario, tweet) VALUES($usuario, '$tweet')";
 		$connectionSuccessfuly = mysqli_query($this->conectMysql(), $sql);
 		

 		if($connectionSuccessfuly){
 			
 			}

 		}

 		public function get_tweet($id){

 		$sql = "SELECT t.id_tweet, t.id_usuario, t.tweet, date_format(t.data_inclusao, '%d %b %Y %T') AS data_inclusao_format, u.usuario FROM  tweet AS t JOIN usuario AS u ON(t.id_usuario = u.id) WHERE id_usuario = $id ORDER BY data_inclusao DESC";
 		$connection = mysqli_query($this->conectMysql(), $sql);
 		


 		if($connection){
 			
 			while($tweet = mysqli_fetch_array($connection)){
 				echo '<a href="#" class="list-group-item">';
 				echo '<h4 class="list-group-item-heading">'. $tweet['usuario'].'<small> - '.$tweet['data_inclusao_format'].'<small></h4>';
 				echo '<p class="list-group-item-text" style="font-size: 25px;">'.$tweet['tweet'].'</p>';
 				echo '</a>';
 			}

 		}

 		}


};

?>