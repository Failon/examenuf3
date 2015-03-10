<?php 

class login{
	protected $user;
	protected $password;
	function __construct($user, $password){
		$this->user = $user;
		$this->password = $password;
	}

	function verificar_acceso($db){
		$query = "SELECT name FROM users WHERE name = '".$this->user."' AND pass = '".$this->password."'";
		$resultado = $db->prepare($query);
		$resultado->execute();
		$captura = $resultado->fetch(PDO::FETCH_ASSOC);
		var_dump($captura);
		if($captura == false){
			return false;
		}
		else{
			return true;
		}
	}
}

