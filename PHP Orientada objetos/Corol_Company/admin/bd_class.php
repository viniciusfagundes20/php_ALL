<?php  

class bd{

private $host = 'localhost';
//private $user = 'id8819734_root_vinicin';
//private $password = '19Deoutubr@';
//private $database = 'id8819734_coroldatabase';

private $user = 'root';
private $password = '';
private $database = 'id8819734_coroldatabase';

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


}; //class ?>