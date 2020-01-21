<?php
require_once("../Modelo/Login.php");
$email = $_REQUEST['email'];
$contrasena = $_REQUEST['contrasena'];
$login = new Login();
$resultado = $login->ingreso($email,$contrasena);
die(var_dump($resultado));

if($resultado[0]['cantidad'] < 1){
	$return = "Usuario o contrasena incorrectos, intenta nuevamente";
}else{

}

die($return);
?>