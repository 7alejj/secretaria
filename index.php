
<!DOCTYPE html>

<html>
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

<body>
<div id="body1">
    <div class="div2"> 
        
        <form method="post" name="form.consulta" action="">
        <img src="img/pruebas/u5.png">    
    <h2>Iniciar Sesión</h2>
        <input type="text" name="user" id="usuario" placeholder="   Nombre Usuario" required/><label for="name"></label>
            
         <input type="password" name="clave" id="clave" placeholder="   Contraseña" required/><label for="name"></label>
            
        <input class="b1" id="entrarSistema" type="button" value="Acceder">
            
    </form>

         
    </div>
    
    
    <div class="div2">
   
       
             <form method="GET" name="form.consulta" action="buscodni.php">
                 
        <img id="imgg" src="img/pruebas/ej5.png">
    <h2>Consulta</h2>
        <input placeholder="Ingrese DNI de alumno" name="dni">
                 
                 
        <input class="b1" type="submit" value="Buscar">
                 
    </form>
        <?php
include "busco.php";
?>
        
    </div>
    
    
    </div>       
</body>

<script type="text/javascript">
	$(document).ready(function(){
		$('#entrarSistema').click(function(){
			if($('#usuario').val()==""){
				alertify.alert("Debes agregar el usuario");
				return false;
			}else if($('#clave').val()==""){
				alertify.alert("Debes agregar el password");
				return false;
			}

			cadena="usuario=" + $('#usuario').val() + 
					"&clave=" + $('#clave').val();

					$.ajax({
						type:"POST",
						url:"validacion.php",
						data:cadena,
						success:function(r){
							if(r==1){
                                alertify.alert("espere a que le asigne un nivel de usuario");   
							}else if(r==2){
								window.location="profesor/header-prof.php";
							}else if(r==3){
                               window.location="preceptor/reg-alumn-p.php";
                            }else if(r==4){
                               window.location="secretario/header-p.php";
                            }else if(r==-1){
                               alertify.error("Fallo al iniciar");
                            } else{
                                 alertify.error("Fallo al agregar");
                            }
						}
					});
		});	
	});
</script>
</html>