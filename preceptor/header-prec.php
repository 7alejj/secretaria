<?php 

session_start();

    require_once '../conexion.php';
if(isset($_SESSION['user'])){
    
    if($_SESSION['user']['nivel']==3){
?>

<head>
<meta charset="utf-8">
    <link rel="stylesheet" href="../css/estindex.css"><link rel="stylesheet" href="../css/estilo-prec.css">
<meta name="viewport" content="width=device-width, initial-scale=0.3,  maximum-scale=1">
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script type="text/javascript" src="../css/Script2.js"></script>
</head>
    
<header>
    <div id="div1">
        <img src="../img/logo1.png" >
        <a href="index.html" >Secretaria<br>Virtual</a>
        <div>
        <img id="img-user" src="../img/sirius.png">
        <h3> <?php echo $_SESSION['user']['nombre'];?> </h3>
        </div>
        </div>
</header>
<nav  id="nav">
    <ul> 
        <li></li>
    <li class="li"  id="a-pr1"><a  class="a-s6" href="list-cursos.php">Asistencia</a></li>  
        
        
    <li class="li"  id="a-pr2"><a  class="a-s6" href="list-t-cursos.php">Mis Cursos</a>
       
        </li>
        <li  class="li" id="a-pr3"><a class="a-s6" href="reg-alumn.php" >Agregar Alumno</a></li>
        
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