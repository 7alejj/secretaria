<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/estilomodificar1.css"/>
    </head>
<body>
    <div class="caja">
    <h1>Modificar</h1>
<?php
include "conexion.php";

$acentos = $conexion->query("SET NAMES 'utf8'");

$dni = $_REQUEST["dni"];

$SQL= "SELECT * FROM curso";
$respuesta_curso = $conexion->query($SQL);

$SQL= "SELECT dni,apellido, nombre,curso.curso as cursonombre FROM alumno 
	INNER JOIN curso ON curso.id_curso = alumno.curso WHERE dni=$dni";
        
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
	echo "<td><h3>curso</h3>"; 
	
	echo "<select name='curso'>";
	while($dato1 = $respuesta_curso->fetch_assoc())
	{
		if($dato1["id"]==$dato["curso"]){
			echo "<option value='".$dato1["id"]."'selected>".$dato1["curso"]."</option>";
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