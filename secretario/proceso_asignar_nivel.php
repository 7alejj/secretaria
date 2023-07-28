<?php 
include "../conexion.php";

$acentos = $conexion->query("SET NAMES 'UTF8'");

	$id=$_REQUEST['id_persona'];
	$nivel=$_REQUEST['nivel'];

$SQL= "UPDATE persona SET nivel='$nivel'  WHERE id_persona=$id";

if(!$respuesta_comercio = $conexion->query($SQL)){
	echo $conexion->error;
}else{
	header("Location: list-sol.php");
}

?>