<!DOCTYPE html>
<html lang="es">
<head>
	<title>Buscar alumnes :)</title>
	<meta charset="UTF-8">
</head>
<body>
	
	<?php
	include "conexion.php";
	$acentos = $conexion->query("SET NAMES 'utf8'");
	$cur= "SELECT * FROM curso";

	//$selec= "SELECT * FROM alumno"; la cambio por la otra consulta, para mostrar el curso, y no el id
	$selec= "SELECT dni, apellido, nombre, direccion, localidad, codigo_postal, nacionalidad, lugar_nacimiento, fecha_nacimiento, sexo, e_mail, telefono, celular, curso.curso_nom as cursonombre FROM alumno  
	INNER JOIN curso ON curso.id_curso = alumno.curso ORDER BY dni";

	$respuesta_alumno= $conexion->query($selec);
		echo "<h3>Lista de alumnos</h3>";
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

		while($dato = $respuesta_alumno->fetch_assoc())
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
			echo "<td>".$dato["cursonombre"]."</td>"; // viene del alias
			echo "<td> <a href=agregar-curso.php?dni=".$dato["dni"].">Actualizar</a></td>";
            echo "<td><a href='eliminaralumno.php?dni=".$dato['dni']."'>Eliminar</a></td>";
           
			echo "</tr>";
		}
		echo "</table>";
		$conexion->close();
	?>



</body>
</html>