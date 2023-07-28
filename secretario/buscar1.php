<?php
$conectar = new mysqli("localhost", "root", "", "siriu");
$mostrar = "";
$seleccionar= "SELECT * FROM alumno ORDER BY dni ";

if (isset($_POST['consulta'])) {
	$sal= $conectar->real_escape_string($_POST['consulta']);
	$seleccionar= "SELECT dni, apellido, nombre, curso FROM alumno WHERE dni LIKE '%$sal%' OR nombre LIKE '%$sal%' OR apellido LIKE '%$sal%' ";
}
$resultado = $conectar->query($seleccionar);


if ($resultado->num_rows>=0) {
	
	$mostrar.="<table border=1>
				<thead>
					<tr>
						<td>DNI</td>
						<td>Nombre</td>
						<td>Apellido</td>
						<td>Curso</td>
					</tr>
				</thead>
				<tbody>";
	while ($fila = $resultado->fetch_assoc()) {
			$mostrar.="<tr>
					<td>".$fila['dni']."</td>
					<td>".$fila['nombre']."</td>
					<td>".$fila['apellido']."</td>
                    
                    <td> <select onchange='cambiar(".$fila['dni'].",this)'>
                    ";
                    
                    
                    $xx = "SELECT * FROM curso ORDER BY id_curso";
                    $reslt = $conectar->query($xx);
                    
                    
                    while ($filac = $reslt->fetch_assoc()) {
                        $mostrar.="<option value ='". $filac["id_curso"]."' >". $filac["curso_nom"]."</option>";
                    }
                    
            $mostrar.="</select>
						</tr>";
				}	
				$mostrar.="</tbody></table>";
	} else {
		$mostrar.="no hay coincidencias";
	}
	echo $mostrar;
	$conectar->close();

?>