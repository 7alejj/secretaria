<?php
// trae la conexion
include "conexion.php";

//me permite trabajar con caracteres españoles
$acentos = $conexion->query("SET NAMES  'utf8' ");
//selecciona todo los datos de la tabla localidad
$SQL= "SELECT * FROM localidad";
//verifica y ejecuta la "SQL"
if (!$respuesta = $conexion->query($SQL)){
	//si algo esta mal lo informa
	echo $conexion->error;
}
?>

<!DOCTYPE html>
<head>
<meta charset="utf-8">
    <title>Registrarme</title>
    <link rel="stylesheet" href="css/estindex.css">
<meta name="viewport" content="width=device-width, initial-scale=0.3,  maximum-scale=1">
</head>
<?php 
require_once "scripts.php"; 
require_once 'header-s.php';
?>

<body>
<div id="body2">
<h2>Registro</h2>
    <form method="POST" id="form2" action="proceso_registrar.php">
        <div class="div4">
    <h3>Apellido y Nombres</h3>
        <input type="text" name="apellido" id="apellido" placeholder="   Apellido">
        <input type="text" name="nombre" id="nombre" placeholder="   Nombre">
        </div>
        
        <div class="div3">
        <div>
    <h3>DNI</h3>
        <input type="text" name="dni" id="dni" placeholder="   Ingrese DNI">
        </div>    
        
        <div>
    <h3>Dirección</h3>
        <input type="text" name="direccion" id="direccion" placeholder='...' >
        </div>
        </div> 
        
        <div class="div3">
        <div class="box">
    <h3>Localidad</h3>
        <select name="localidad" id="localidad" >
            <option value="" selected>Localidad</option> 
		<?php
		//mientras tenga registros la variable "respuesta"
		//se guarda en la variable "dato" cada uno de los campos

            while($dato=$respuesta->fetch_assoc()){
	//genera los option dependiendo de los datos de la tabla categoria
	echo "<option value='".$dato["id_localidad"]."'>".$dato["nombre"]."</option>";
}		

?>
		</select>
        </div>
            
        <div>
    <h3>Codigo Postal</h3>
        <input type="number" name="cp" id="cp"  Placeholder="   CP">
        </div>
        </div>
        
        
        
        <div class="div3">
        <div>
    <h3>Nacionalidad</h3>
        <input type="text" name="nacionalidad" id="nacionalidad"  placeholder="   Nacionalidad">
        
        </div>
        
        <div>
    <h3>Lugar de Nacimiento</h3>
        <input type="text" id="lugar" name="lugar" Placeholder="   ...">
        </div>
        </div>
          <div class="div3">  
        <div>
    <h3>Fecha de Nacimiento</h3>
        <input type="date" id="fecha" name="fecha" placeholder="   ...">
        </div> 
              
              
        <div class="box">
    <h3>Género</h3>
        <select id="sexo" name="sexo">
            <option value=""  selected>Género</option>
		<option value="F" >Femenino</option>
		<option value="M" >Masculino</option>
        <option value="O" >Otro</option>

		</select>
        </div>
        </div>
             <div class="div3"> 
        <div>
    <h3>Correo Electronico</h3>
        <input type="gmail" id="mail" name="mail" placeholder="   ejemplo123@gmail.com">
        </div>
        <div>
    <h3>Télefono</h3>
        <input type="text" id="telefono" name="telefono" placeholder="   Ej: 02202 1234-4321">
        </div>
        </div>
             
        
        <div class="div3">
        <div>
    <h3>Nombre de Usuario</h3>
        <input type="text" id="usuario" name="usuario"  placeholder="   Ingrese Nombre de usuario">
        </div>
        <div>
    <h3>Contraseña</h3>
        <input type="text" id="clave" name="clave" placeholder="   Contraseña">
        </div>
        </div>
        
        <div class="div5">
    <input type="button" id="registrarNuevo" class="b1" value="&#10004; Enviar">
    <input type="reset" class="b1" value="&#10006; Eliminar">       
        </div>
    </form>
    
    
    
    
    </div>
    <script type="text/javascript">
	$(document).ready(function(){
		$('#registrarNuevo').click(function(){

			if($('#apellido').val()==""){
				alertify.alert("Debes agregar el apellido");
				return false;
			}else if($('#nombre').val()==""){
				alertify.alert("Debes agregar el nombre");
				return false;
			}else if($('#dni').val()==""){
				alertify.alert("Debes agregar un dni");
				return false;
			}else if($('#direccion').val()==""){
				alertify.alert("Debes agregar tu direccion");
				return false;
			}else if($('#localidad').val()==""){
				alertify.alert("Debes agregar tu localidad");
				return false;
			}else if($('#cp').val()==""){
				alertify.alert("Debes agregar tu codigo postal");
				return false;
			}else if($('#nacionalidad').val()==""){
				alertify.alert("Debes agregar tu nacionalidad");
				return false;
			}else if($('#lugar').val()==""){
				alertify.alert("Debes agregar tu lugar de nacimiento");
				return false;
			}else if($('#fecha').val()==""){
				alertify.alert("Debes agregar tu fecha de nacimiento");
				return false;
			}else if($('#sexo').val()==""){
				alertify.alert("Debes agregar tu sexo");
				return false;
			}else if($('#mail').val()==""){
				alertify.alert("Debes agregar un mail");
				return false;
			}else if($('#telefono').val()==""){
				alertify.alert("Debes agregar un telefono");
				return false;
			}else if($('#usuario').val()==""){
				alertify.alert("Debes agregar un usuario");
				return false;
			}else if($('#clave').val()==""){
				alertify.alert("Debes agregar una contraseña");
				return false;
			}

			cadena="apellido=" + $('#apellido').val() +
					"&nombre=" + $('#nombre').val() +
					   "&dni=" + $('#dni').val() + 
				 "&direccion=" + $('#direccion').val() +
				 "&localidad=" + $('#localidad').val() +
					    "&cp=" + $('#cp').val() +
              "&nacionalidad=" + $('#nacionalidad').val() +
					 "&lugar=" + $('#lugar').val() +
					 "&fecha=" + $('#fecha').val() +
					  "&sexo=" + $('#sexo').val() +
					  "&mail=" + $('#mail').val() +
				  "&telefono=" + $('#telefono').val() +
					  "&usuario=" + $('#usuario').val() +
					 "&clave=" + $('#clave').val();

					$.ajax({
						type:"POST",
						url:"proceso_registrar.php",
						data:cadena,
						success:function(r){

							if(r==2){
								alertify.alert("Este usuario ya existe, prueba con otro :)");
							}
							else if(r==1){
								$('#form2')[0].reset();
								alertify.success("Agregado con exito");
							}else{
								alertify.error("Fallo al agregar");
							}
						}
					});
		});
	});
</script>
</body>