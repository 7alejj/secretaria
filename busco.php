<!DOCTYPE html>
<html>
<head>
	<title>Resultados</title>
</head>
<body>
<?php
	if(isset($_GET["valor"])){

	$valor= $_GET["valor"];
	$campo= $_GET["campo"];

	include ("conexion.php");

	$bus= "SELECT * FROM alumno WHERE $campo like '%$valor%'";
	$resul= $conexion->query($bus);

	
		echo "<table border='3'>";
		echo "<tr>";
		echo "<th>DNI</th>";
		echo "<th>Apellido</th>";
		echo "<th>Nombre</th>";
		echo "<th>Dirección</th>";
		echo "<th>Localidad</th>";
		echo "<th>Cod_Postal</th>";
		echo "<th>Nacionalidad</th>";
		echo "<th>Lugar de Nac</th>";
		echo "<th>Fecha de Nac</th>";
		echo "<th>Sexo</th>";
		echo "<th>E-Mail</th>";
		echo "<th>Teléfono</th>";
		echo "<th>Celu</th>";
		echo "<th>Curso</th>";
		echo "<th>Actualizar</th>";
		echo "<th>Eliminar</th>";
		echo "</tr>";

		while($dato = $resul->fetch_assoc())
        {
			echo "<tr>";
			echo "<td>".$dato["dni"]."</td>";
			echo "<td>".$dato["apellido"]."</td>";
			echo "<td>".$dato["nombre"]."</td>";
			echo "<td>".$dato["direccion"]."</td>";
			echo "<td>".$dato["localidad"]."</td>";
			echo "<td>".$dato["codigo_postal"]."</td>";
			echo "<td>".$dato["nacionalidad"]."</td>";
			echo "<td>".$dato["lugar_nacimiento"]."</td>";
			echo "<td>".$dato["fecha_nacimiento"]."</td>";
			echo "<td>".$dato["sexo"]."</td>";
			echo "<td>".$dato["e_mail"]."</td>";
			echo "<td>".$dato["telefono"]."</td>";
			echo "<td>".$dato["celular"]."</td>";
			echo "<td>".$dato["curso"]."</td>"; // viene del alias
            echo "<td> <a href=agregar-curso.php?dni=".$dato["dni"].">Actualizar</a></td>";
            echo "<td><a href='eliminaralumno.php?dni=".$dato['dni']."'>Eliminar</a></td>";
           
			echo "</tr>";
		}
		echo "</table>";
        }
		
	?>
    </body>
</html>