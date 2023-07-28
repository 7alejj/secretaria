<?php


$conexion = new mysqli ("localhost","root","","siriu");

if ($conexion->connect_error){
 die ("connection failed: " . $conexion->connect_error);
}else{
    echo "";
}

?>