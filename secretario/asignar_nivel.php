<?php 
session_start();
require_once '../conexion.php';
if(isset($_SESSION['user'])){
    
    if($_SESSION['user']['nivel']==4  ){
     

    
?>

   <html>
    <head>
<meta charset="utf-8">
    <link rel="stylesheet" href="../css/estindex.css"><link rel="stylesheet" href="../css/estilo-p.css">
<meta name="viewport" content="width=device-width, initial-scale=0.3,  maximum-scale=1">
  
    <script type="text/javascript" src="../css/Script1.js"></script>
</head>
    
<header>
    <div id="div1">
        <img src="../img/logo1.png" >
        <a href="index.html" >Secretaria<br>Virtual</a>
        <div>
        <img id="img-user" src="../img/sirius.png">
        <h3> <?php echo $_SESSION['user']['nombre'] ?> </h3>
        </div>
        </div>
</header>
<nav  id="nav">
    <ul> 
        <li></li>
    <li class="li"  id="a-s1"><a  class="a-s6" href="list-prece.php">Preceptores</a></li>  
        
        
    <li class="li"  id="a-s2"><a  class="a-s6" href="#">Cursos</a>
          <ul class="sub-m2" >
        <li  class="li-sm" ><a href="list-cursos.php" >Buscar</a></li>
        <li  class="li-sm" ><a href="reg-alumn.php" >Registrar  alumno</a></li>
        </ul>
        
        </li>
    <li class="li" id="a-s3"> <a class="a-s6"  href="list-prof.php" >Profesores</a>
        
        </li>
    <li class="li" id="a-s4" ><a  class="a-s6" href="list-sol.php" >Solicitudes</a></li>
    <li class="li"  id="a-s5"><a  class="a-s6" href="help.php">Ayuda</a></li>
    <li class="li" ><a class="a-s6" href="../salir.php" > Salir </a></li>
        <li  ></li>
    </ul></nav>
    <form action='proceso_asignar_nivel.php' method='get'>
    <table class="fl-table">
        <thead>
        <tr>
            <th>Apellido</th>
            <th>Nombre</th>
            <th>dni</th>
            <th>nivel</th>
            <th>asignar nivel</th>
            <th>guardar</th>
        </tr>
        </thead>
       <?php
        

$acentos = $conexion->query("SET NAMES 'utf8'");

$id = $_REQUEST['id_persona'];

$SQL1= "SELECT * FROM nivel"; //cambie sql1
$respuesta_curso = $conexion->query($SQL1);

$SQL= "SELECT id_persona,apellido, nombre,dni,nivel FROM persona
	INNER JOIN nivel ni ON ni.id_nivel = persona.nivel WHERE id_persona = $id";
            if(!$respuesta_alumno = $conexion->query($SQL)){
	echo $conexion->error;
}       
      

while($dato = $respuesta_alumno->fetch_assoc())
{
 echo "<tr>";
	echo "<td hidden='hidden'><input  name='id_persona' value='".$dato["id_persona"]."'></td>";
    
	echo "<td>".$dato["apellido"]." </td>";
	echo "<td>".$dato["nombre"]." </td>";
	echo "<td>".$dato["dni"]."</td>"; 
	echo "<td>".$dato["nivel"]."</td>"; 

	echo "<td>"; 
	echo "<select name='nivel'>";
	while($dato1 = $respuesta_curso->fetch_assoc())
	{
			echo "<option value=".$dato1["id_nivel"].">".$dato1["tipo"]."</option>";
		
	}	
	echo "</select>";
    echo "<td><input type='submit' value='Guardar' class='boton'></td";
	echo "</tr>";
    
     
}
               
echo "</Table>";

echo "</form>";

?>
        </div>
    </body>
</html>
    <?php
}else {
	header("location:../index.php");
	}
} else {
	header("location:../index.php");
	}
?>