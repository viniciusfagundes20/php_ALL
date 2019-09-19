<?php  

session_start();

class bd{

private $host = 'localhost';
private $user = 'id8789858_root_vinicin';
private $password = '19deoutubro';
private $database = 'id8789858_eef';


public function connection(){
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

	$sql = "SELECT * FROM REGISTROS WHERE USUARIO = '$usuario' and SENHA = '$senha'";
	$query = mysqli_query($this->connection(), $sql);

	if($query){
		$data = mysqli_fetch_array($query);

		if(isset($data['USUARIO'])){
			$_SESSION['usuario'] = $data['USUARIO'];
			$_SESSION['email'] = $data['EMAIL'];
			$_SESSION['id_usuario'] = $data['ID'];
			$_SESSION['admin'] = $data['ADM'];

            echo '<script type="text/javascript">var url = "https://espacoencantofestas.000webhostapp.com/index/index.php"; window.location.href = url;</script>';
            
		}else{ echo '<script type="text/javascript"> var url = "https://espacoencantofestas.000webhostapp.com/index/authenticar.php?erro=1"; window.location.href = url;</script>'; }
	}


		
}


public function inserir($nome, $email, $senha){

 	$sql = "INSERT INTO REGISTROS(USUARIO, SENHA, EMAIL) VALUES('$nome', '$senha', '$email')";
 	$sqlConsulta = "SELECT * FROM REGISTROS WHERE usuario = '$nome'";
	$usuarioExiste = mysqli_query($this->connection(), $sqlConsulta);
 	
 	if($usuarioExiste){
 		$data = mysqli_fetch_array($usuarioExiste);
 		if(isset($data['usuario'])){
 			echo '<script type="text/javascript"> var url = "https://espacoencantofestas.000webhostapp.com/index/inscrevase.php?erro=2"; window.location.href = url;</script>';
 			return false;
 		}
 	}	//caso não exista, insira novo usuário

 		$returnSQL = mysqli_query($this->connection(), $sql);
 	
 		if($returnSQL){

 			//
 			$_SESSION['email'] = $email;
 			$_SESSION['usuario'] = $nome;
 			header("location: index.php");
 			echo '<script type="text/javascript"> var url = "https://espacoencantofestas.000webhostapp.com/index/index.php"; window.location.href = url;</script>';
 			//

 		}else{
 			echo "Error: ".mysql_error();
 		}

 	}




}; //class ?>


