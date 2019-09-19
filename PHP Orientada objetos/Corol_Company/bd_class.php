<?php  

class bd{

private $host = 'localhost';
//private $user = 'id8819734_id_root_vinicin';
//private $password = '!@toor#2d9k';
private $database = 'id8819734_coroldatabase';
private $user = 'root';
private $password = '';

public function connection(){
   $con = mysqli_connect($this->host, $this->user, $this->password) or die(mysql_error());
		mysqli_select_db($con, $this->database);
		mysqli_set_charset($con,'utf8');

		if(!$con){
			echo "Error: ". $conn->connect_error;
			echo "Error ao conectar ao servidor: ".mysql_error();
			return false; 
		}else{
			return $con;
		}
		
		

}



public function consultaLogin($usuario, $senha, $cookie){

	$sql = "SELECT * FROM REGISTROS WHERE USUARIO = '$usuario' and SENHA = '$senha'";
	$query = mysqli_query($this->connection(), $sql);

	if($query){
		$data = mysqli_fetch_array($query);

		if(isset($data['USUARIO'])){
			echo "Usuário authenticado com sucesso !";

			$_SESSION['usuario'] = $data['USUARIO'];
			$_SESSION['email'] = $data['EMAIL'];
			$_SESSION['id_usuario'] = $data['ID'];
			$_SESSION['admin'] = $data['ADMIN'];
			
			if($cookie){
				setcookie("d56441f95028a331b996349dcb3948e6", $data['SENHA'], time() + (3 * 24 * 3600));
				setcookie("f56441d95028a3310996349dcc3948cx", $data['USUARIO'], time() + (3 * 24 * 3600));
				setcookie("56jks6445028a3310dgf349hhcc3k94k", "f56441d95028a3310996349dcc3948cx", time() + (3 * 24 * 3600));
				setcookie("ghfd5fd0a3310996349dcc3948cxjjsk", "d56441f95028a331b996dse6", time() + (3 * 24 * 3600));	
			}

			 echo '   <script type="text/javascript">window.location.href = "https://corolcompany.000webhostapp.com/index.php"</script>';

		}else{
			echo '<script type="text/javascript">window.location.href = "https://corolcompany.000webhostapp.com/authenticar.php?erro=1"</script>';
		}
	}


		
}


public function inserir($nome, $email, $senha){

 	$sql = "INSERT INTO REGISTROS(USUARIO, SENHA, EMAIL) VALUES('$nome', '$senha', '$email')";
 	$sqlConsulta = "SELECT * FROM REGISTROS WHERE usuario = '$nome'";
	$usuarioExiste = mysqli_query($this->connection(), $sqlConsulta);
 	
 	if($usuarioExiste){
 		$data = mysqli_fetch_array($usuarioExiste);
 		if(isset($data['USUARIO'])){
 			echo '<script type="text/javascript">window.location.href = "https://corolcompany.000webhostapp.com/inscrevase.php?erro=2"</script>';
 			return false;
 		}
 	}	//caso não exista, insira novo usuário

 		$returnSQL = mysqli_query($this->connection(), $sql);
 	
 		if($returnSQL){

 			$_SESSION['email'] = $email;
 			$_SESSION['usuario'] = $nome;
 			
 			echo '<script type="text/javascript"> window.location.href = "./index.php"</script>';
 			
 			//

 		}else{
 		    echo 'Ocorreu um erro durante a operação ! Tente novamente';
 		}

 	}

function cursosDisponiveis(){

$bd = new bd;
$sql = 'SELECT * FROM CURSOS';
$query = mysqli_query($bd->connection(), $sql);

return $query;
	
}
};  //class ?>

