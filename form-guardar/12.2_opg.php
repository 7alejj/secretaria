<?php
    include ("conexion.php");
$sql =  mysqli_select_db ($conexion, "secretaria") or die ("errorl");
$id_profesor = $_POST['id_profesor'];
$id_alumno = $_POST['id_alumno'];
$trimestre1 = $_POST['1trimestre'];
$trimestre2 = $_POST['2trimestre'];
$trimestre3 = $_POST['trimestre'];


$query = mysqli_query ($conexion, "INSERT INTO trimestres (id_profesor,id_alumno,1trimestre,2trimestre,trimestre) VALUES ('$id_profesor','$id_alumno','$trimestre1','$trimestre2','$trimestre3')");



    if($query){ 
        header("location: menu.html");
    }
    else{
        echo"insercion no exitosa";
    }
