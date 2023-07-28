<?php

session_start();
	include "conexion.php";
	
    $usuario=$_POST['usuario']; 
    $clave=$_POST['clave'];
	
    $sql= "SELECT * FROM persona WHERE usuario = '$usuario' AND clave = '$clave'";    
    $resultado= $conexion->query($sql);
    $fila = $resultado->num_rows;
   
		if($fila>0){
             $arreglo=$resultado->fetch_assoc();
            echo $arreglo['nivel'];
            $_SESSION['user']["id"]=$arreglo['id_persona'];
            $_SESSION['user']["nombre"]=$arreglo['nombre'];
            $_SESSION['user']["nivel"]=$arreglo['nivel'];
           
		}else{
			echo -1;
		}
    

    
  
       

?>