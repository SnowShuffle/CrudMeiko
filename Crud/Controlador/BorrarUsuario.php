<?php
require_once("../Modelo/MovimientosUsuarios.php");
$id = $_REQUEST['id'];
$agregar = new MovimientosUsuarios();
$resultado = $agregar->BorrarUsuario($id);
if(!$resultado){
    $return[0]="Error";
    $return[1]="Error Al Borrar El Usuario";
}else{
    $return[0]="OK";
    $return[1]="Usuario Borrado Correctamente";
}

die(json_encode($return));