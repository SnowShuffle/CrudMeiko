<?php
require_once("../Modelo/MovimientosUsuarios.php");
$id = $_REQUEST['id'];
$agregar = new MovimientosUsuarios();
$resultado = $agregar->buscarUsuario($id);
if(!$resultado){
    $return[0]="Error";
    $return[1]="Error Al Buscar El Usuario";
}else{
    $return[0]="OK";
    $return[1]=$resultado;
}

die(json_encode($return));