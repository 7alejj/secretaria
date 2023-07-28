<!DOCTYPE html>
<head>
<meta charset="utf-8">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/estindex.css">
<meta name="viewport" content="width=device-width, initial-scale=0.3,  maximum-scale=1">
</head>
<?php 
require_once "scripts.php"; 
require_once 'header-s.php';
?>

	<title>Resultados</title>

<body>
<div id="body1">
    <div id="body4">
<?php
	if(isset($_GET["dni"])){

	$dni= $_GET["dni"];

	include ("conexion.php");

	$registros= mysqli_query ($conexion, "SELECT * FROM alumno WHERE dni=$dni"); 
    $filas=mysqli_num_rows($registros);
        if($filas>0){

		
		echo "<table id='tabl-3' border='0'>";
		echo "<tr>";
		echo "<th>DNI</th>";
		echo "<th>Apellido</th>";
		echo "<th>Nombre</th>";
		
		echo "<th>Código Postal</th>";
		echo "<th>Nacionalidad</th>";
		echo "<th>Fecha de Nacimiento</th>";
		echo "<th>Género</th>";
		echo "<th>Curso</th>";
		echo "</tr>";

	while($dato = mysqli_fetch_array($registros))
        {
			echo "<tr>";
			echo "<td>".$dato["dni"]."</td>";
			echo "<td>".$dato["apellido"]."</td>";
			echo "<td>".$dato["nombre"]."</td>";
			echo "<td>".$dato["codigo_postal"]."</td>";
			echo "<td>".$dato["nacionalidad"]."</td>";
			echo "<td>".$dato["fecha_nacimiento"]."</td>";
			echo "<td>".$dato["sexo"]."</td>";
			echo "<td>".$dato["curso"]."</td>";
           echo "</tr>";
            echo "</table>";
		
    
      echo "<table id='tabl-2' >";
          echo "<colgroup>";
              echo "<col span='2'>";
          echo "</colgroup>";

    echo "<tr>";
      echo "<td class='td-sj' colspan='2'><h3>MATERIAS</h3></td>";
        echo "<td class='td-sj' > <h5 class='subject'>SUBJECT EXAMPLE</h5></td>";
        echo "<td class='td-sj' > <h5 class='subject'>SUBJECT EXAMPLE</h5></td>";
        echo "<td class='td-sj' > <h5 class='subject'>SUBJECT EXAMPLE</h5></td>";
        echo "<td class='td-sj' > <h5 class='subject'>SUBJECT EXAMPLE</h5></td>";
        echo "<td class='td-sj' > <h5 class='subject'>SUBJECT EXAMPLE</h5></td>";
        echo "<td class='td-sj' > <h5 class='subject'>SUBJECT EXAMPLE</h5></td>";
        echo "<td class='td-sj' > <h5 class='subject'>SUBJECT EXAMPLE</h5></td>";
        echo "<td class='td-sj' > <h5 class='subject'>SUBJECT EXAMPLE</h5></td>";
        echo "<td class='td-sj' > <h5 class='subject'>SUBJECT EXAMPLE</h5></td>";
        echo "<td class='td-sj' > <h5 class='subject'>SUBJECT EXAMPLE</h5></td>";
        echo "<td class='td-sj' > <h5 class='subject'>SUBJECT EXAMPLE</h5></td>";
        echo "<td class='td-sj' > <h5 class='subject'>SUBJECT EXAMPLE</h5></td>";
        echo "<td class='td-sj' > <h5 class='subject'>SUBJECT EXAMPLE</h5></td>";
        echo "<td class='td-sj' > <h5 class='subject'>SUBJECT EXAMPLE</h5></td>";
        echo "<td class='td-sj' > <h5 class='subject'>SUBJECT EXAMPLE</h5></td>";
        echo "<td class='td-sj' > <h5 class='subject'>SUBJECT EXAMPLE</h5></td>";
        echo "<td class='td-sj' > <h5 class='subject'>SUBJECT EXAMPLE</h5></td>";
        echo "<td class='td-sj' > <h5 class='subject'>SUBJECT EXAMPLE</h5></td>";
        echo "<td class='td-sj' > <h5 class='subject'>SUBJECT EXAMPLE</h5></td>";
        echo "<td class='td-sj'> <h5 class='subject'>SUBJECT EXAMPLE</h5></td>";        
             echo "<td class='td-sj' > <h5 class='subject'>SUBJECT EXAMPLE</h5></td>";
             echo "<td style='background:#333A56; color:#e3e3e3;'class='td-sj'><h5 class='subject'>INACISTENCIAS</h5></td>";
        
    echo "</tr>";
        
        echo "<tr>";
            echo "<td  rowspan='4' ><h3 class='invert'>Trimestre</h3></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td class='td-f' ><h3>Primero</h3></td>";
            
           echo  "<td>0</td>";
           echo  "<td>0</td>";
           echo  "<td>0</td>";
           echo  "<td>0</td>";
           echo  "<td>0</td>";
           echo  "<td>0</td>";
           echo " <td>0</td>";
           echo  "<td>0</td>";
           echo  "<td>0</td>";
           echo  "<td>0</td>";
           echo  "<td>0</td>";
           echo  "<td>0</td>";
           echo  "<td>0</td>";
           echo  "<td>0</td>";
           echo  "<td>0</td>";
           echo  "<td>0</td>";
           echo  "<td>0</td>";
           echo  "<td>0</td>";
           echo  "<td>0</td>";
           echo " <td>0</td>";
           echo  "<td>0</td>";
            echo "<td>0</td>";
    
        echo "</tr><tr>";
        echo "<td class='td-f' ><h3>Segundo</h3></td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
        echo "</tr><tr>";
        echo "<td class='td-f' ><h3>Tercero</h3></td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
        echo "</tr>";
        
          echo "<tr><td class='td-f' colspan='2'><h3>Calificación anual</h3></td>";
        
            echo "<td class='td-l' >0</td>";
            echo "<td class='td-l' >0</td>";
            echo "<td class='td-l' >0</td>";
            echo "<td class='td-l' >0</td>";
            echo "<td class='td-l' >0</td>";
            echo "<td class='td-l' >0</td>";
            echo "<td class='td-l' >0</td>";
            echo "<td class='td-l' >0</td>";
            echo "<td class='td-l' >0</td>";
            echo "<td class='td-l' >0</td>";
            echo "<td class='td-l' >0</td>";
            echo "<td class='td-l' >0</td>";
            echo "<td class='td-l' >0</td>";
            echo "<td class='td-l' >0</td>";
            echo "<td class='td-l' >0</td>";
            echo "<td class='td-l' >0</td>";
            echo "<td class='td-l' >0</td>";
            echo "<td class='td-l' >0</td>";
            echo "<td class='td-l' >0</td>";
            echo "<td class='td-l' >0</td>";
            echo "<td class='td-l' >0</td>";
            echo "<td class='td-l' >0</td>";
        
        echo "</tr><tr>";
            echo "<td rowspan='3' ><h3 class='invert'>Comisión Evaluadora</h3></td></tr>";
         echo "<tr><td  class='td-xp' ><h3>Diciembre</h3></td>";
        
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td style='background:#333A56;'></td></tr>";
        
        
        
        
          echo "<tr><td class='td-xp' ><h3>Febrero/Marzo</h3></td>";
        
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td style='background:#333A56;'></td> </tr>";
       
        
          echo "<tr><td  class='td-f' colspan='2'><h3>Comisión Evaluadora Adicional</h3></td>";
        
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
            echo "<td>0</td>";
           echo "<td style='background:#333A56;'></td>";
       echo "</tr>";
        echo "<tr>";
        echo "<td  class='td-f' colspan='2' ><h3>Calificación Definitiva</h3></td>";
            echo "<td class='td-l' >0</td>";
            echo "<td class='td-l' >0</td>";
            echo "<td class='td-l' >0</td>";
            echo "<td class='td-l' >0</td>";
            echo "<td class='td-l' >0</td>";
            echo "<td class='td-l' >0</td>";
            echo "<td class='td-l' >0</td>";
            echo "<td class='td-l' >0</td>";
            echo "<td class='td-l' >0</td>";
            echo "<td class='td-l' >0</td>";
            echo "<td class='td-l' >0</td>";
            echo "<td class='td-l' >0</td>";
            echo "<td class='td-l' >0</td>";
            echo "<td class='td-l' >0</td>";
            echo "<td class='td-l' >0</td>";
            echo "<td class='td-l' >0</td>";
            echo "<td class='td-l' >0</td>";
            echo "<td class='td-l' >0</td>";
            echo "<td class='td-l' >0</td>";
            echo "<td class='td-l' >0</td>";
            echo "<td class='td-l' >0</td>";
            echo "<td style='background:#333A56;'></td>";
        
        echo "</tr>";
        
echo "</table>";   
            
        }
         
       
      }else{
    echo "<center>";
        echo "<h1>posiblemente ah ingresado mal el dni vuelva a intentarlo</h1>";
        
         echo "<div class='div2''>";
         echo "<form method='GET' name='form.consulta' action='buscodni.php'>";
        echo "<img id='imgg' src='img/pruebas/ej5.png'>";
        echo "<h2>Consulta</h2>";
        echo "<input placeholder='Ingrese DNI de alumno'name='dni'>";
        echo "<input class='b1' type='submit'value='Buscar'>";
        echo "</form>";
        echo "</div>";
        echo "</center>";
       
    }}
    
	?>
  
  
   </div>
    </div>
    </body>