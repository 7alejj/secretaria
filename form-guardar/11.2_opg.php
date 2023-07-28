<?php
    include ("conexion.php");
$sql =  mysqli_select_db ($conexion, "secretaria") or die ("errorl");
$cuil = $_POST['cuil'];
$apellido = $_POST['apellido'];
$nombre = $_POST['nombre'];
$f_nacimiento = $_POST['f_nacimiento'];
$sexo = $_POST['sexo'];
$n_calle = $_POST['n_calle'];
$localidad = $_POST['localidad'];
$telefono = $_POST['telefono'];


$query = mysqli_query ($conexion, "INSERT INTO profesores (cuil,apellido,nombre,f_nacimiento,sexo,n_calle,localidad,telefono) VALUES ('$cuil','$apellido','$nombre','$f_nacimiento','$sexo','$n_calle','$localidad','$telefono')");



    if($query){ 
        header("location: menu.html");
    }
    else{
        echo"insercion no exitosa";
    }
