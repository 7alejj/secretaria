<?php
    include ("conexion.php");
$sql =  mysqli_select_db ($conexion, "secretaria") or die ("errorl");
$aula = $_POST['aula'];
$preceptor = $_POST['preceptor'];
$cant_alumno = $_POST['cant_alumno'];
$turno = $_POST['turno'];
$curso = $_POST['curso'];
$especiaidad_curso = $_POST['especiaidad_curso'];

$query = mysqli_query ($conexion, "INSERT INTO cursovdiv (aula,preceptor,cant_alumno,turno,curso,especiaidad_curso) VALUES ('$aula','$preceptor','$cant_alumno','$turno','$curso','$especiaidad_curso')");



    if($query){ 
        header("location: menu.html");
    }
    else{
        echo"insercion no exitosa";
    }
?>