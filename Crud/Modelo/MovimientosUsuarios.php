<?php
require_once("Conexion.php");

class MovimientosUsuarios{
	public function NuevoRegistro($email,$contrasena,$nombre,$apellidos,$pais){
		$conexion = new conexion();		
		$query = "insert into usuarios(nombres,apelidos,email,contrasena,pais) values ('$email','$contrasena','$nombre','$apellidos','$pais')";
		$db = $conexion->conectar();
		$resultado = $conexion->ManipulacionDatos($db,$query);
		return $resultado;
	}	

	public function ModificarRegistro($id,$email,$contrasena,$nombre,$apellidos,$pais){
		$conexion = new conexion();		
		$query = "update usuarios set nombres = '$nombre',
									  apelidos = '$apellidos',
									  email = '$email',
									  contrasena = '$contrasena',
									  pais = '$pais'
				 where id = $id";
		$db = $conexion->conectar();
		$resultado = $conexion->ManipulacionDatos($db,$query);
		return $resultado;
	}

	public function ConsultarUsuarios(){
		$conexion = new conexion();		
		$query = "select id,nombres,apelidos as apellidos,email,pais
				  from usuarios
				  where 1=1;";
		$db = $conexion->conectar();
		$resultado = $conexion->consultar($db,$query);
		return $resultado;
	}

	public function buscarUsuario($id){
		$conexion = new conexion();		
		$query = "select id,nombres,apelidos as apellidos,email,pais,contrasena
				  from usuarios
				  where id=$id;";
		$db = $conexion->conectar();
		$resultado = $conexion->consultar($db,$query);
		return $resultado;
	}

	public function BorrarUsuario($id){
		$conexion = new conexion();		
		$query = "delete
				  from usuarios
				  where id=$id;";
		$db = $conexion->conectar();
		$resultado = $conexion->ManipulacionDatos($db,$query);
		return $resultado;
	}
}


?>