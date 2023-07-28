<?php
    include ("conexion.php");
$sql =  mysqli_select_db ($conexion, "secretaria") or die ("errorl");
$id_alumno = $_POST['id_alumno'];
$id_materia = $_POST['id_materia'];
$id_trimestre = $_POST['id_trimestre'];
$ciclo_lectivo = $_POST['ciclo_lectivo'];
$promedio_anual = $_POST['promedio_anual'];
$calificacion_definitiva = $_POST['calificacion_definitiva'];
$rinde_x_materia = $_POST['rinde_x_materia'];
$curso_div = $_POST['curso_div'];

$query = mysqli_query ($conexion, "INSERT INTO calificacion (id_alumno,id_materia,id_trimestre,ciclo_lectivo,promedio_anual,calificacion_definitiva,rinde_x_inasistencia) VALUES ('$id_alumno','$id_materia','$id_trimestre','$ciclo_lectivo','$promedio_anual','$calificacion_definitiva','$rinde_x_inasistencia')");



    if($query){ 
        header("location: menu.html");
    }
    else{
        echo"insercion no exitosa";
    }
?>