<?php 

require_once '../conexion.php';
if(!session_id())session_start();
if(isset($_SESSION['user'])){
    
    if($_SESSION['user']['nivel']==4  ){
         $sql= "SELECT * FROM persona ";    
         $resultado= $conexion->query($sql);
     

    
?>


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
<?php
}else {
	header("location:../index.php");
	}
} else {
	header("location:../index.php");
	}
?>