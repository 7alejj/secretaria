<?php
    include ("conexion.php");
$sql =  mysqli_select_db ($conexion, "secretaria") or die ("errorl");
$id_calificacion = $_POST['id_calificacion'];
$fecha_examen = $_POST['fecha_examen'];
$libro_acta = $_POST['libro_acta'];
$folio_acta = $_POST['folio_acta'];
$nota_examen = $_POST['nota_examen'];
$condicion = $_POST['condicion'];


$query = mysqli_query ($conexion, "INSERT INTO materias_adeudadas (id_calificacion,fecha_examen,libro_acta,folio_acta,nota_examen,condicion) VALUES ('$id_calificacion','$fecha_examen','$libro_acta','$folio_acta','$nota_examen','$condicion')");



    if($query){ 
        header("location: menu.html");
    }
    else{
        echo"insercion no exitosa";
    }
