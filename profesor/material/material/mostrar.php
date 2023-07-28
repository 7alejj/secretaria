<?php
include "conexion.php";

$SQL = "SELECT * FROM material";

if($res = $conexion->query($SQL)){
	echo "<table border=2>";
	while($fila = $res->fetch_array()){
		echo "<tr>";
		echo "<td>".$fila["docente"]."</td>";
		echo "<td>".$fila["materia"]."</td>";
		echo "<td>".$fila["curso"]."</td>";
		echo "<td>".$fila["grupo"]."</td>";
       
        echo "<td>".$fila["descripcion"]."</td>";
        echo "<td><a href='sv_4/material/subir_archivo'>Bajar Archivo</a></td>";
		echo "<tr>";
	}
	echo "</table>";
	
	/*
	$s = 0;
	if(isset($_COOKIE["pepe"])){
		$s = $_COOKIE["pepe"] + 1;
		setcookie("pepe",$s);
		
	}else{
		setcookie("pepe","1");
		$s = $_COOKIE["pepe"];
	}
	
	echo $s;
*/
}
?>