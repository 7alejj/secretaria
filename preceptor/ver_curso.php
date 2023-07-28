<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/estilomodificar1.css"/>
    </head>
<body>
    <div class="caja">
    <center>
<?php
include "../conexion.php";

$acentos = $conexion->query("SET NAMES 'utf8'");

$id = $_REQUEST["id_curso"];

$SQL= "SELECT * FROM alumno";
$respuesta_curso = $conexion->query($SQL);

$SQL= "SELECT id_curso,curso_nom,especialidad,turno,al.dni,al.apellido,al.nombre FROM curso 
    INNER JOIN alumno al ON al.curso = curso.id_curso  WHERE id_curso=$id";
        
require_once 'header-p.php';
               
?>
<div id="body2" >      
<?php
        
if(!$respuesta_alumno = $conexion->query($SQL)){
	echo $conexion->error;
}           
?>
    <div class="table-wrapper">
    <?php
echo "<Table class='fl-table'>";
        
      echo "<thead><tr>";
	echo "<th hidden='hidden'><h3>curso</h3> </th>";
	echo "<th><h3>dni</h3> </th>";
	echo "<th><h3>apellido</h3> </hd>";
	echo "<th><h3>nombre</h3></th>";
	echo "<th><h3>curso</h3></th>";
	echo "<th><h3>especialidad</h3></th>";
	echo "<th><h3>turno</h3></th>";
    echo "</tr></thead>";
        
while($dato = $respuesta_alumno->fetch_assoc())
{
	echo "<tr>";
    echo "<td>".$dato["dni"]."</td>";
	echo "<td>".$dato["apellido"]."</td>";
	echo "<td>".$dato["nombre"]."</td>";
	echo "<td>".$dato["curso_nom"]." </td>";
	echo "<td>".$dato["especialidad"]." </td>";
	echo "<td>".$dato["turno"]."</td>";
    echo "<td hidden='hidden'>".$dato["id_curso"]." </td>";
    echo "</tr>";
    }

        echo $conexion->error;
  
echo "</Table></div>";

?>
    
    </div>  
    
       </center>
        </div>
    </body>
</html>