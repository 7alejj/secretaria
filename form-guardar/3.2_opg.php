<?php
    include ("conexion.php");
$sql =  mysqli_select_db ($conexion, "secretaria") or die ("errorl");
$cupo = $_POST['cupo'];
$id_materia = $_POST['id_materia'];
$curso_div = $_POST['curso_div'];
$grupo = $_POST['grupo'];
$dni_profesor = $_POST['dni_profesor'];

$query = mysqli_query ($conexion, "INSERT INTO cursada (cupo,id_materia,curso_div,grupo,dni_profesor) VALUES ('$cupo','$id_materia','$curso_div','$grupo','$dni_profesor')");



    if($query){ 
        header("location: menu.html");
    }
    else{
        echo"insercion no exitosa";
    }
?>