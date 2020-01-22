<?php
require_once("../Modelo/AgregarUsuario.php");
$email = $_REQUEST['email'];
$contrasena = $_REQUEST['contrasena'];
$nombres = $_REQUEST['nombres'];
$apellidos = $_REQUEST['apellidos'];
$pais = $_REQUEST['pais'];
$agregar = new MovimientosUsuarios();
$resultado = $agregar->NuevoRegistro($email,$contrasena,$nombres,$apellidos,$pais);
if($resultado >= 1){
    $return[0] = "OK";
    $return[1] = "Usuario Creado Correctamente";
}else{
    $return[0] = "Error";
    $return[1] = "Error al crear usuario intente nuevamente";
}

die(json_encode($return));
?>