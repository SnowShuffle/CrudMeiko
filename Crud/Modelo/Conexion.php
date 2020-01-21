<?php
class conexion{
	public function conectar(){
		$con = mysqli_connect("127.0.0.1", "root", "", "crud");
		return $con;
	}

	public function consultar($con,$consulta){
		$consulta = mysqli_query($con,$consulta);
		$resultado = mysqli_fetch_array($consulta,MYSQLI_NUM);
		return $resultado;
	}
}