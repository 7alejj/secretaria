<!DOCTYPE html>
<head>
<meta charset="utf-8">
    <title>Profesores</title>
    <link rel="stylesheet" href="../css/estilo-p.css">
<meta name="viewport" content="width=device-width, initial-scale=0.3,  maximum-scale=1">
</head>
<?php 
require_once 'header-p.php';   
        $id = $_REQUEST['id'];
                $query="SELECT * FROM persona WHERE id_persona='$id'";
                $resultado= $conexion->query($query); 
                $row=$resultado->fetch_assoc();

?>
<div class="body4">
        <h2 class="h2-s" >Datos filtrados de Profesores:</h2>
    <div class="d-filter" >
        
        
        <div class="d-filter1">
    <h3>Nombre: <i> <?php echo $row['nombre']; echo ' '; echo $row['apellido'];  ?> </i></h3>
             
    <h3>DNI: <i> <?php echo $row['dni']; ?> </i></h3>    
            
            
    <h3>Nombre de usuario: <i> <?php echo $row['usuario']; ?> </i></h3>
    
    <h3>Correo: <i> <?php echo $row['e_mail'];  ?> </i></h3>    
        
    <h3>Localidad: <i> <?php echo $row['localidad']; ?> </i></h3>
        
    <h3>Dirección:<i> <?php echo $row['direccion']; ?> </i></h3> 
            
        </div>
        
        <div class="d-filter1">
    <h3>Nacionalidad: <i> <?php echo $row['nacionalidad']; ?> </i></h3>
    <h3>Género:<i> <?php echo $row['sexo'];  ?> </i></h3>    
            
            
    <h3>Fecha de Nacimiento: <i> <?php echo $row['fecha_nacimiento']; ?> 
        
        
    <h3>Nro Télefono: <i> <?php echo $row['telefono']; ?> </i></h3>  
        
        
    <h3>el nivel: <i> <?php echo $row['nivel']; ?> </i></h3>
    
        </div>
    
        
        
        
        
        
    </div>
</div>