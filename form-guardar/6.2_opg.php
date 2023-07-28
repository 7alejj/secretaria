<?php
    include ("conexion.php");
$sql =  mysqli_select_db ($conexion, "secretaria") or die ("errorl");
$anio_ingreso = $_POST['anio_ingreso'];
$Legajo = $_POST['Legajo'];
$libro_matriz = $_POST['libro_matiz'];
$folio_matriz = $_POST['folio_matiz'];
$id_alumno = $_POST['id_alumno'];

$query = mysqli_query ($conexion, "INSERT INTO indice (anio_ingreso,Legajo,libro_matriz,folio_matriz,id_alumno) VALUES ('$anio_ingreso','$Legajo','$libro_matriz','$folio_matriz','$id_alumno')");



    if($query){ 
        header("location: menu.html");
    }
    else{
        echo"insercion no exitosa";
    }
?>