<?php
include "conexion.php";
$acentos = $conexion->query("SET NAMES 'utf8'");
//selecciono los prof
$prof= "SELECT * FROM persona";
//materia
$materia= "SELECT * FROM materia";
$consul_mate= $conexion->query($materia);
//cursos 
$curso= "SELECT * FROM curso";
$consul_curso= $conexion->query($curso);

if (!$consul_prof = $conexion->query($prof)){
    //si algo esta mal lo informa
    echo $conexion->error;
}
?>
<html>
	<head> <title>Subir archivos </title>
	</head>

<body>
	
<form name="form" action="subir.php" method="post" enctype="multipart/form-data">
Docente: <br>
<select name="profesor">
                <?php
                while($reg = $consul_prof->fetch_assoc())
				{
                 //genera los option dependiendo de los registros de la tabla persona
					$profesor=$reg["id_persona"];
					echo "<option value='".$reg["id_persona"]."'>".$reg["apellido"]." ".$reg["nombre"]."</option>";
				}
			?>
</select>
<br>
Materia:<br>
<select name="materia">
			<?php
                while($regmate = $consul_mate->fetch_assoc())
				{
                 //genera los option dependiendo de los registros de la tabla persona
					echo "<option value='".$regmate["id_materia"]."'>".$regmate["materia"]."</option>";
				}
			?>
</select>
<br>
curso:<br>
<select name="curso">
			<?php
                while($regcurso = $consul_curso->fetch_assoc())
				{
                 //genera los option dependiendo de los registros de la tabla persona
					echo "<option value='".$regcurso["id_curso"]."'>".$regcurso["curso_nom"]."</option>";
				}
			?>
</select>
<br>
Grupo:<br>
<!--<input type="text" name="grupo"><br>
nombre:<br> 
<input type="text" name="nombre"><br> -->
Descripcion:<br>
<input type="text" name="descripcion"><br>

<table>
<tr>
	<td>
	<label for="archivo">Archivo:</label>
	</td>
	<td>
		<input type="file" id="i" name="archivo" accept=".pdf" size="3000" required=""> 
	</td>
</tr>

<tr> <td colspan="2" style="text-align: center"> <input type="button" name="" value="Subir" onclick="funcion()"> </td>

</tr>	
</table>
</form>

<script type="text/javascript"> 
function funcion(){ 
archivo = document.getElementById("i").value; 
ext = archivo.split(".");
// aca le agregan otra extesion que quieren admitir, ojo! agregarlo tmb en el if del action con OR
if ((ext[1]=='pdf') || (ext[1]=='PDF')) {
	document.form.submit();
} else {
	alert ("Sólo se admiten archivos PDF");
}

}
//alert(ext[1]); return false;

</script>
</body>
</html>