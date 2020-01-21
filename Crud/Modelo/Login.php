<?php
require_once("Conexion.php");

class Login extends conexion{
	public function ingreso($email,$contrasena){
		$conexion = new conexion();		
		$query = "select count(email) as cantidad
				  from usuarios
				  where email = $email
				  and   contrasena = $contrasena";
		$db = $conexion->conectar();
		$resultado = $conexion->consultar($db,$consulta);
		return $resultado;
	}	
}


?>