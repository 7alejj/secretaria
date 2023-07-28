<?php

$conexion= new mysqli ("localhost", "root", "", "siriuss");
 //Comprobar si tiene un error
if ($conexion->connect_error) {
    //Informa cual fue el error
    die("Connection failed: " . $conexion->connect_error);
}

?>
