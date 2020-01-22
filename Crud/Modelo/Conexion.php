<?php
class conexion{
	public function conectar(){
		$con = mysqli_connect("127.0.0.1", "root", "", "crud");
		return $con;
	}

	public function consultar($con,$consulta){
		$query = mysqli_query($con,$consulta);
		$resultado = mysqli_fetch_array($query,MYSQLI_ASSOC);
		return $resultado;
	}

	public function ManipulacionDatos($con,$consulta){
		$query = mysqli_query($con,$consulta);
		$resultado = mysqli_affected_rows($con);
		return $resultado;
	}
}