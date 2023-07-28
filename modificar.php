<?php 
include "conexion.php";

$acentos = $conexion->query("SET NAMES 'UTF8'");

	$dni=$_REQUEST['dni'];
	$apellido=$_REQUEST['apellido'];
	$nombre=$_REQUEST['nombre'];
	$curso=$_REQUEST['curso'];

$SQL= "UPDATE alumno SET dni=$dni, apellido='$apellido', nombre='$nombre', curso='$curso' WHERE dni=$dni";

if(!$respuesta_comercio = $conexion->query($SQL)){
	echo $conexion->error;
}else{
	header("Location: buscar-alumno.php");
}

?>