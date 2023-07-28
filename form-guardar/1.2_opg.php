<?php
    include ("conexion.php");
$dni = $_REQUEST['dni'];
$apellido = $_REQUEST['apellido'];
$nombre = $_REQUEST['nombre'];
$direccion = $_REQUEST['direccion'];
$localidad = $_REQUEST['localidad'];
$codigo_postal = $_REQUEST['codigo_postal'];
$nacionalidad = $_REQUEST['nacionalidad'];
$lugar_nacimiento = $_REQUEST['lugar_nacimiento'];
$fecha_nacimiento = $_REQUEST['fecha_nacimiento'];
$sexo = $_REQUEST['sexo'];
$e_mail = $_REQUEST['e_mail'];
$telefono = $_REQUEST['telefono'];
$celular = $_REQUEST['celular'];

$query = "INSERT INTO alumno (dni, apellido, nombre, direccion, localidad, codigo_postal, nacionalidad, lugar_nacimiento, fecha_nacimiento, sexo, e_mail, telefono, celular,curso) VALUES ($dni,'$apellido','$nombre','$direccion','$localidad',$codigo_postal,'$nacionalidad','$lugar_nacimiento','$fecha_nacimiento','$sexo','$e_mail',$telefono, $celular,1)";

if(!$respuesta = $conexion ->query($query)){ 
        echo $conexion->error;
    }
?>