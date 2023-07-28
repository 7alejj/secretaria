<?php 
session_start();
require_once '../conexion.php';
if(isset($_SESSION['user'])){
    
    if($_SESSION['user']['nivel']==4  ){
         $sql= "SELECT * FROM persona ";    
         $resultado= $conexion->query($sql);
     

    
?>

<!DOCTYPE html>
<head>
<meta charset="utf-8">
    <title>Mis Cursos</title>
    <link rel="stylesheet" href="../css/estilo-p.css">
<meta name="viewport" content="width=device-width, initial-scale=0.3,  maximum-scale=1">
</head>
<?php 
require_once 'header-p.php';
?>
<div class="body4">
    
    
    <div id="reg-al">
    
    <h2>Registrar alumno</h2>
    <form action="../form-guardar/1.2_opg.php" method="get">
        
        <div class="div3">
        <div>
    <h3>DNI</h3>
        <input type="text" name="dni" placeholder="   Ingrese DNI">
        </div>    
        
        </div>
        
        <div class="div4">
            
            
    <h3>Apellido y Nombres</h3>
        <input type="text" name="apellido" placeholder="   Apellido">
        <input type="text" name="nombre""placeholder="   Nombre">
        </div>
        
         
        
        <div class="div3">
            
        <div>
    <h3>Dirección</h3>
        <input type="text" name="direccion" placeholder=' Ej: "Homespace 327" ' >
        </div>
            
        <div>
   <h3>Seleccionar Localidad</h3>
        <select  name="localidad">
            <?php
                        include("../conexion.php");
                        $query="SELECT * FROM localidad";
                        $resultado= $conexion->query($query);
                        while($row=$resultado->fetch_array()){
                    ?>
            <option value=".$row['id_localidad']." > <?php echo $row['nombre']; ?></option>
            <?php  } ?>
            </select>
        </div>
        
        </div>
        
        
        
        <div class="div3">
            
            
        <div>
    <h3>Codigo Postal</h3>
        <input type="number" name="codigo_postal"  Placeholder="   CP">
        </div>
        <div>
    <h3>Nacionalidad</h3>
        <input type="text" name="nacionalidad" placeholder="   Nacionalidad">
        </div>
        
       
        </div>
        
          
        <div class="div3">
             <div>
    <h3>lugar de nacimiento</h3>
        <input type="text" name="lugar_nacimiento" placeholder="...">
        </div>
         <div>
    <h3>fecha de nacimiento</h3>
        <input type="date" name="fecha_nacimiento">
        </div>
        </div>
        
           <div class="div3">
        <div>
    <h3>Género</h3>
        <select name="sexo">
            <option value="F" >Femenino</option>
            <option value="M" >Masculino</option>
            <option value="O" >Otro</option>
            
            </select>
        </div>
        
       <div>
    <h3>Correo Eléctronico</h3>
        <input name="e_mail" Placeholder="ingrese su correo...">
        </div>
        </div>
        
        <div class="div3"> 
        <div>
    <h3>Telefono de Contacto</h3>
        <input type="text" name="telefono" placeholder="Ej:  02202 1234-1234">
        </div>
        
        <div>
    <h3>Celular de Contacto</h3>
        <input type="text" name="celular" placeholder="Ej: 9 11 1234-5678" >
        </div>
        </div>
        
        
        <div class="div5">
    <input type="submit" class="b1" value="&#10004; Enviar">
    <input type="reset" class="b1" value="&#10006; Eliminar">       
        </div>
    </form>
    
    
    
    </div>
</div>
<?php
}else {
	header("location:../index.php");
	}
} else {
	header("location:../index.php");
	}
?>