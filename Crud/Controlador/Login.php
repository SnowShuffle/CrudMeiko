<?php
require_once("../Modelo/Login.php");
$email = $_REQUEST['email'];
$contrasena = $_REQUEST['contrasena'];
$login = new Login();
$resultado = $login->ingreso($email,$contrasena);

if(!$resultado['cantidad']){
	$return = "Usuario o contrasena incorrectos, intenta nuevamente";
}else{	
	$return = 'OK';
}

die(json_encode($return));
?>