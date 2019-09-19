<?php 

namespace Sts\Models;

use PDO;

class DB{

	private static $host = "localhost";
	private static $user = "root";
	private static $pass = "";
	private static $DB = "celke";	

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

}


?>