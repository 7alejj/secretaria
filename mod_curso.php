<?php
$conectar = new mysqli("localhost", "root", "", "siriu");


$dni = $_REQUEST['dni'];
$curson = $_REQUEST['curson_nom'];
    
$seleccionar= "UPDATE alumno SET curso = $curson WHERE $dni=dni";
$resultado = $conectar->query($seleccionar);
?>