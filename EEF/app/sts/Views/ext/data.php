<?php 

namespace sts\Views\ext;

class data{

	public function return(){

		$user = isset($_SESSION["user"]) ? $_SESSION["user"] : 0;
		$email = isset($_SESSION["email"]) ? $_SESSION["email"] : 0;
		$photo = isset($_SESSION["photo"]) ? $_SESSION["photo"] : 0;
		$adm = isset($_SESSION["adm"]) ? $_SESSION["adm"] : 0;
		$deslogin = isset($_SESSION["deslogin"]) ? $_SESSION["deslogin"] : 0;

		$data = array('user' => $user, 'email' => $email, 'photo' => $photo, 'adm' => $adm, 'deslogin' => $deslogin);
		
		return $data;
	}


	public function unsetAll(){

		unset($nome);
		unset($email);
		unset($photo);
		unset($adm);
		unset($deslogin);

	}

}



?>