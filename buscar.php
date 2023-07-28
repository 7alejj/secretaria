<!DOCTYPE html>
<html>
<head>
	<title>Busqueda por campos</title>
</head>
<body>
	SELECCIONE EL CAMPO QUE DESEA BUCAR <br>
<form action="busco.php" method="GET">
	<label>Ingrese valor: <input type="text" name="valor"> </label>
	<label>Nombre 
		<input type="radio" name="campo" value="nombre"> 
	</label>
	<label>Apellido
		<input type="radio" name="campo" value="apellido" checked> 
	</label>
	<label>Dni
		<input type="radio" name="campo" value="dni"> 
	</label>
	
	<input type="submit" value="Buscar">
</form>




<?php
include "busco.php";
?>

</body>
</html>