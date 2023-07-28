<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/estilomodificar1.css"/>
    </head>
<body>
    <div class="caja">
    <h1>Modificar</h1>
<?php
/* bas.consulta nunca me llamaba los datos, por eso hice otro. 
 este archivo deberia llamarse update o actualizar, no solo agregar curso
 pq mas vale que agreguen lo que falta para que se actualizen todos los campos :p
 no les quiero arruinar el dia, jaja pero deberiamos si quieren, modificar la opcion sexo
 para que tmb sea con un id y haga referencia a otra tabla, por ende mas relaciones cuack
 es una idea, aunque si consideramos M, H  y otros, podria ser nomas un option simple.
*/
include "conexion.php";

$acentos = $conexion->query("SET NAMES 'utf8'");

$dni = $_REQUEST['dni'];

$SQL1= "SELECT * FROM curso"; //cambie sql1
$respuesta_curso = $conexion->query($SQL1);

$SQL= "SELECT dni, apellido, nombre, direccion, localidad, codigo_postal, curso.id_curso, curso.curso_nom as cursonombre FROM alumno 
	INNER JOIN curso ON curso.id_curso = alumno.curso WHERE dni = '$dni'";

if(!$respuesta_alumno = $conexion->query($SQL)){
	echo $conexion->error;
}       
      
echo "<form action='modificar.php' method='get'>";
echo "<Table style='width:500px'>";
while($dato = $respuesta_alumno->fetch_assoc())
{
	echo "<tr>";
	echo "<td><h3>Dni</h3><input type='text' class='texto' name='dni' value='".$dato["dni"]."'> </td>";
	echo "<td><h3>Apellido</h3><input type='text' class='texto' name='apellido' value='".$dato["apellido"]."'> </td>";
	echo "<td><h3>Nombre</h3><input name='nombre' value='".$dato["nombre"]."'></td>"; 
	echo "<td><h3>Dirección</h3><input name='direccion' value='".$dato["direccion"]."'></td>"; 
	echo "<td><h3>Localidad</h3><input name='nombre' value='".$dato["localidad"]."'></td>";
	echo "<td><h3>Cod_Pos</h3><input name='nombre' value='".$dato["codigo_postal"]."'></td>";/*
	echo "<td><h3>Nacionalidad</h3><input name='nombre' value='".$dato["nombre"]."'></td>";
	echo "<td><h3>Lugar Nac</h3><input name='nombre' value='".$dato["nombre"]."'></td>";
	echo "<td><h3>Fecha Nac</h3><input name='nombre' value='".$dato["nombre"]."'></td>";
	echo "<td><h3>Sexo</h3><input name='nombre' value='".$dato["nombre"]."'></td>";
	echo "<td><h3>E-mail</h3><input name='nombre' value='".$dato["nombre"]."'></td>";
	echo "<td><h3>Telefono</h3><input name='nombre' value='".$dato["nombre"]."'></td>";
	echo "<td><h3>Celular</h3><input name='nombre' value='".$dato["nombre"]."'></td>";*/

	echo "<td><h3>Curso</h3>"; 
	echo "<select name='curso'>";
	while($dato1 = $respuesta_curso->fetch_assoc())
	{
		if($dato1["id_curso"]==$dato["curso"]){
			echo "<option value='".$dato1["id_curso"]."'>".$dato1["curso_nom"]."</option>";
		}
		else {
			echo "<option value='".$dato1["id_curso"]."'>".$dato1["curso_nom"]."</option>";
		}
	}	
	echo "</select>";
	echo "</tr>";
}
        echo "<input type='submit' value='Guardar' class='boton'>";
echo "</Table>";
echo "</form>";

?>
        </div>
    </body>
</html>