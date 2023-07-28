<?php


$conexion = new mysqli ("localhost","u761283263_siriu","sirius","u761283263_siriu");

if ($conexion->connect_error){
 die ("connection failed: " . $conexion->connect_error);
}else{
    echo "";
}

?>