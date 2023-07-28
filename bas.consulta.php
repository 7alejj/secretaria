
<!DOCTYPE html>
<head>
<meta charset="utf-8">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/estindex.css">
<meta name="viewport" content="width=device-width, initial-scale=0.3,  maximum-scale=1">
</head>

<?php
include "conexion.php";
require_once 'header-s.php';
if(isset($_GET["alumno"])){

	$alumno= $_GET["alumno"];
	
	$bus= "SELECT * FROM alumno"; //modifico "SELECT * FROM 
	$resul= $conexion->query($bus);
    echo "<center>";
	echo "<table border='3'>";
			echo "<tr>";
			echo "<th>dni</th>";
			echo "<th>apellido</th>";
			echo "<th>nombre</th>";
			echo "</tr>";

			while ($arre = $resul->fetch_assoc()){

				echo "<tr>";
				echo "<td>".$arre["dni"]."</td>";
				echo "<td>".$arre["apellido"]."</td>";
				echo "<td>".$arre["nombre"]."</td>";
				echo "<td> <a href=agregar-curso.php?dni=".$arre["dni"].">agregar un curso</a></td>";
	            echo "<td><a href='eliminar.php?dni=".$arre['dni']."'>Eliminar</a></td>";
	           
				echo "</tr>";
			}
		echo "</table>";
		echo "</center>";
	}
?>

<body>
<div id="body3">
    
      <table id="tabl-2" >
          <colgroup>
              <col span="2">
          </colgroup>

    <tr>
      <td class="td-sj" colspan="2"><h3>MATERIAS</h3></td>
        <td class="td-sj" > <h5 class="subject">SUBJECT EXAMPLE</h5></td>
        <td class="td-sj" > <h5 class="subject">SUBJECT EXAMPLE</h5></td>
        <td class="td-sj" > <h5 class="subject">SUBJECT EXAMPLE</h5></td>
        <td class="td-sj" > <h5 class="subject">SUBJECT EXAMPLE</h5></td>
        <td class="td-sj" > <h5 class="subject">SUBJECT EXAMPLE</h5></td>
        <td class="td-sj" > <h5 class="subject">SUBJECT EXAMPLE</h5></td>
        <td class="td-sj" > <h5 class="subject">SUBJECT EXAMPLE</h5></td>
        <td class="td-sj" > <h5 class="subject">SUBJECT EXAMPLE</h5></td>
        <td class="td-sj" > <h5 class="subject">SUBJECT EXAMPLE</h5></td>
        <td class="td-sj" > <h5 class="subject">SUBJECT EXAMPLE</h5></td>
        <td class="td-sj" > <h5 class="subject">SUBJECT EXAMPLE</h5></td>
        <td class="td-sj" > <h5 class="subject">SUBJECT EXAMPLE</h5></td>
        <td class="td-sj" > <h5 class="subject">SUBJECT EXAMPLE</h5></td>
        <td class="td-sj" > <h5 class="subject">SUBJECT EXAMPLE</h5></td>
        <td class="td-sj" > <h5 class="subject">SUBJECT EXAMPLE</h5></td>
        <td class="td-sj" > <h5 class="subject">SUBJECT EXAMPLE</h5></td>
        <td class="td-sj" > <h5 class="subject">SUBJECT EXAMPLE</h5></td>
        <td class="td-sj" > <h5 class="subject">SUBJECT EXAMPLE</h5></td>
        <td class="td-sj" > <h5 class="subject">SUBJECT EXAMPLE</h5></td>
        <td class="td-sj" > <h5 class="subject">SUBJECT EXAMPLE</h5></td>
        <td class="td-sj" > <h5 class="subject">SUBJECT EXAMPLE</h5></td><td style="background:#343B4E; color:#e3e3e3;" class="td-sj" > <h5 class="subject">INACISTENCIAS</h5></td>
        
    </tr>
        
        <tr>
            <td  rowspan="4" ><h3 class="invert">Trimestre</h3></td>
        </tr>
        <tr>
        <td class="td-f" ><h3>Primero</h3></td>
            
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
    
        </tr><tr>
        <td class="td-f" ><h3>Segundo</h3></td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
        </tr><tr>
        <td class="td-f" ><h3>Tercero</h3></td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
        </tr>
        
          <tr><td class="td-f" colspan="2"><h3>Calificación anual</h3></td>
        
            <td class="td-l" >0</td>
            <td class="td-l" >0</td>
            <td class="td-l" >0</td>
            <td class="td-l" >0</td>
            <td class="td-l" >0</td>
            <td class="td-l" >0</td>
            <td class="td-l" >0</td>
            <td class="td-l" >0</td>
            <td class="td-l" >0</td>
            <td class="td-l" >0</td>
            <td class="td-l" >0</td>
            <td class="td-l" >0</td>
            <td class="td-l" >0</td>
            <td class="td-l" >0</td>
            <td class="td-l" >0</td>
            <td class="td-l" >0</td>
            <td class="td-l" >0</td>
            <td class="td-l" >0</td>
            <td class="td-l" >0</td>
            <td class="td-l" >0</td>
            <td class="td-l" >0</td>
            <td class="td-l" >0</td>
        
        </tr>
        <tr>
            <td rowspan="3" ><h3 class="invert">Comisión Evaluadora</h3></td>
        </tr>
          <tr><td  class="td-xp" ><h3>Diciembre</h3></td>
        
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td style="background:#343B4E;"></td>
        
        </tr>
        
        
          <tr><td class="td-xp" ><h3>Febrero/Marzo</h3></td>
        
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td style="background:#343B4E;"></td>
        </tr>
        
          <tr><td  class="td-f" colspan="2"><h3>Comisión Evaluadora Adicional</h3></td>
        
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td style="background:#343B4E;"></td>
        </tr>
        <tr>
        <td  class="td-f" colspan="2" ><h3>Calificación Definitiva</h3></td>
            <td class="td-l" >0</td>
            <td class="td-l" >0</td>
            <td class="td-l" >0</td>
            <td class="td-l" >0</td>
            <td class="td-l" >0</td>
            <td class="td-l" >0</td>
            <td class="td-l" >0</td>
            <td class="td-l" >0</td>
            <td class="td-l" >0</td>
            <td class="td-l" >0</td>
            <td class="td-l" >0</td>
            <td class="td-l" >0</td>
            <td class="td-l" >0</td>
            <td class="td-l" >0</td>
            <td class="td-l" >0</td>
            <td class="td-l" >0</td>
            <td class="td-l" >0</td>
            <td class="td-l" >0</td>
            <td class="td-l" >0</td>
            <td class="td-l" >0</td>
            <td class="td-l" >0</td>
            <td style="background:#343B4E;"></td>
        
        </tr>
        
</table>
    
    
    
    </div>

</body>