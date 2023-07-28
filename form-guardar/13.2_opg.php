<?php
    include ("conexion.php");

$nombre = $_REQUEST['nombre'];
$apellido = $_REQUEST['apellido'];
$dni_alumno = $_REQUEST['alumno'];
$parentezco = $_REQUEST['parentezco'];
$dni_tutor = $_REQUEST['dni_tutor'];
$telefono = $_REQUEST['telefono'];
$celular = $_REQUEST['celular'];


$query = "INSERT INTO tutor
(nombre,apellido,dni_alumno,parentezco,dni_tutor,telefono,celular) VALUES ('$nombre','$apellido',$dni_alumno,'$parentezco',$dni_tutor,$telefono,$celular)";



    if(!$respuesta = $conexion ->query($query)){ 
        echo $conexion->error;
    }
    else{
        header("location: menu.html");
    }
?>