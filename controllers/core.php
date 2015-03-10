<?php
require 'config.php';
require 'conection.php';
require 'clogin.php';
$db = new conexion($conf);
$conection = $db->conectar();
$usuario = $_POST['user'];
$password = $_POST['pw'];
$login = new login($usuario, $password);
if($login->verificar_acceso($conection)){
	include '/../views/admin.php';
}
else{
	echo "login incorrecto";
}