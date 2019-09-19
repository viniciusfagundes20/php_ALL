<?php 


class DB{

	private static $host = "localhost";
	private static $user = "root";
	private static $pass = "";
	private static $DB = "eef";	

	private static $con = null;

	private static function connect(){

		try{
			if(self::$con == null){
				self::$con = new PDO("mysql:host=" . self::$host . ";dbname=" . self::$DB, self::$user, self::$pass);

				if(!empty(self::$con)):
					return self::$con;
				endif;
				
			}
		}catch(Exception $e){

			echo "Error ao conectar ao servidor !<br>";
			echo "Error: " . $e->getMessage();
			die;

		}

	}


	public function GetConn(){

		return self::connect();
	}


	public function getUsers($id){

		$ID = $id;

		$SQL = "SELECT ID, img, nome, email FROM users WHERE ID = :id";

		$exec = $this::GetConn()->prepare($SQL);
		$exec->bindParam(":id", $ID, PDO::PARAM_INT);

		$exec->execute();

		$row = $exec->fetchAll();

		return $row;
	}

}




?>