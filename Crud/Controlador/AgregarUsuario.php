<?php
require_once("../Modelo/AgregarUsuario.php");
$email = $_REQUEST['email'];
$contrasena = $_REQUEST['contrasena'];
$nombres = $_REQUEST['nombres'];
$apellidos = $_REQUEST['apellidos'];
$pais = $_REQUEST['pais'];
$agregar = new AgregarUsuario();
$resultado = $agregar->NuevoRegistro($email,$contrasena,$nombre,$apellidos,$pais);
die(var_dump($resultado));


die($return);
?>