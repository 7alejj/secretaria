<?php
    include ("conexion.php");
$sql =  mysqli_select_db ($conexion, "secretaria") or die ("errorl");
$id_alumno = $_POST['id_alumno'];
$ciclo_lectivo = $_POST['ciclo_lectivo'];
$curso_div = $_POST['curso_div'];
$Grupo = $_POST['Grupo'];
$adeuda_materias = $_POST['adeuda_materias'];

$query = mysqli_query ($conexion, "INSERT INTO inscripcion (id_alumno,ciclo_lectivo,curso_div,Grupo,adeuda_materias) VALUES ('$id_alumno','$ciclo_lectivo','$curso_div','$Grupo','$adeuda_materias')");



    if($query){ 
        header("location: menu.html");
    }
    else{
        echo"insercion no exitosa";
    }
?>