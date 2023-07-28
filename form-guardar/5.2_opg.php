<?php
    include ("conexion.php");
$sql =  mysqli_select_db ($conexion, "secretaria") or die ("errorl");
$escuela_nombre = $_POST['escuela_nombre'];
$esuela_cue = $_POST['esuela_cue'];
$escuela_direccion = $_POST['escuela_direccion'];
$escuela_sigla = $_POST['escuela_sigla'];
$escuela_tipo = $_POST['escuela_tipo'];
$escuela_nro = $_POST['escuela_nro'];
$escuela_telefono = $_POST['escuela_telefono'];

$query = mysqli_query ($conexion, "INSERT INTO escuela (escuela_nombre,esuela_cue,escuela_direccion,escuela_sigla,escuela_tipo,escuela_nro,escuela_telefono) VALUES ('$escuela_nombre','$esuela_cue','$escuela_direccion','$escuela_sigla','$escuela_tipo','$escuela_nro','$escuela_telefono')");



    if($query){ 
        header("location: menu.html");
    }
    else{
        echo"insercion no exitosa";
    }
?>