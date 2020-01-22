<?php
require_once("../Modelo/MovimientosUsuarios.php");

$consultar = new MovimientosUsuarios();
$resultado = $consultar->ConsultarUsuarios();

if(!$resultado){
	$return = [];
}else{
    $return = array("data"=>array($resultado),
                    "recordsTotal"=> count($resultado));
}

die(json_encode($return));
?>