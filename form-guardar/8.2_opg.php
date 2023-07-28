<?php
    include ("conexion.php");
$sql =  mysqli_select_db ($conexion, "secretaria") or die ("errorl");
$dni_profesor = $_POST['dni_profesor'];
$materia_nombre = $_POST['materia_nombre'];
$materia_depto = $_POST['materia_depto'];
$materia_contenidos = $_POST['materia_contenidos'];
$materias_modulos = $_POST['materia_modulos'];
$materias_curso = $_POST['materias_curso'];
$materias_especialidad = $_POST['materias_especialidad'];


$query = mysqli_query ($conexion, "INSERT INTO materia (dni_profesor,materia_nombre,materia_depto,materia_contenidos,materia_modulos,materias_curso,materia_especialidad) VALUES ('$dni_profesor','$materia_nombre','$materia_depto','$materia_contenidos','$materias_modulos','$materias_curso','$materias_especialidad')");



    if($query){ 
        header("location: menu.html");
    }
    else{
        echo"insercion no exitosa";
    }
