<?php
require_once("Conexion.php");

class MovimientosUsuarios extends conexion{
	public function NuevoRegistro($email,$contrasena,$nombre,$apellidos,$pais){
		$conexion = new conexion();		
		$query = "insert into usuarios(nombres,apelidos,email,contrasena,pais) values ($email,$contrasena,$nombre,$apellidos,$pais)";
		$db = $conexion->conectar();
		$resultado = $conexion->consultar($db,$consulta);
		return $resultado;
	}	

	public function ModificarRegistro($id,$email,$contrasena,$nombre,$apellidos,$pais){
		$conexion = new conexion();		
		$query = "update usuarios set nombres = $nombres,
									  apelidos = $apellidos,
									  email = $email,
									  contrasena = $contrasena,
									  pais = $pais
				 where id = $id";
		$db = $conexion->conectar();
		$resultado = $conexion->consultar($db,$consulta);
		return $resultado;
	}
}


?>