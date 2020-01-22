<?php
require_once("../Modelo/MovimientosUsuarios.php");
$id = $_REQUEST['id'];
$email = $_REQUEST['email'];
$contrasena = $_REQUEST['contrasena'];
$nombres = $_REQUEST['nombres'];
$apellidos = $_REQUEST['apellidos'];
$pais = $_REQUEST['pais'];
$agregar = new MovimientosUsuarios();
$resultado = $agregar->ModificarRegistro($id,$email,$contrasena,$nombres,$apellidos,$pais);
if($resultado >= 1){
    $return[0] = "OK"; 
    $return[1] = "Usuario Actualizado Correctamente";
}else{
    $return[0] = "Error";
    $return[1] = "Error Al actualizar El usuario";
}
die(json_encode($return));
?>