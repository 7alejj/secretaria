
<!DOCTYPE html>
<head>
<meta charset="utf-8">
    <title>Mis Cursos</title>
    <link rel="stylesheet" href="../css/estilo-p.css">
<meta name="viewport" content="width=device-width, initial-scale=0.3,  maximum-scale=1">
</head>
<?php 
require_once 'header-prec.php';
?>
<div class="body4">
    
    
    <div id="reg-al">
    
    <h2>Registrar alumno</h2>
    <form action="../form-guardar/1.2_opphp">
        <div class="div4">
            
            
    <h3>Apellido y Nombres</h3>
        <input type="text" placeholder="   Apellido">
        <input type="text" placeholder="   Nombre">
        </div>
        
        <div class="div3">
        <div>
    <h3>DNI</h3>
        <input type="text" placeholder="   Ingrese DNI">
        </div>    
        
        <div>
    <h3>Dirección</h3>
        <input type="text" placeholder=' Ej: "Homespace 327" ' >
        </div>
        </div> 
        
        <div class="div3">
        <div>
   <h3>Seleccionar Localidad</h3>
        <select  value="">
            <?php
                        include("../conexion.php");
                        $query="SELECT * FROM localidad";
                        $resultado= $conexion->query($query);
                        while($row=$resultado->fetch_array()){
                    ?>
            <option value="<?php $row['id_localidad']; ?>" > <?php echo $row['nombre']; ?></option>
            <?php  } ?>
            </select>
        </div>
        
        <div>
    <h3>Codigo Postal</h3>
        <input type="number"  Placeholder="   CP">
        </div>
        </div>
        
        
        
        <div class="div3">
        <div>
    <h3>Nacionalidad</h3>
        <input type="text" placeholder="   Nacionalidad">
        </div>
        
        <div>
    <h3>lugar de nacimiento</h3>
        <input type="text" placeholder="...">
        </div>
        </div>
        
          
        <div class="div3">
         <div>
    <h3>fecha de nacimiento</h3>
        <input type="date">
        </div>
        <div class="box">
    
        </div>
        
       
        </div>
        
           <div class="div3">
        <div>
    <h3>Género</h3>
        <select>
            <option value="F" >Femenino</option>
            <option value="M" >Masculino</option>
            <option value="O" >Otro</option>
            
            </select>
        </div>
        
        <div>
    <h3>Correo Eléctronico</h3>
        <input type="number"  Placeholder="   CP">
        </div>
        </div>
        
        <div class="div3">
        <div>
    <h3>Telefono de Contacto</h3>
        <input type="text" placeholder="   Ej:  02202 1234-1234">
        </div>
        
        <div>
    <h3>Celular de Contacto</h3>
        <input placeholder="   Ej: 9 11 1234-5678" type="text">
        </div>
        </div>
        
        
        <div class="div5">
    <input type="submit" class="b1" value="&#10004; Enviar">
    <input type="reset" class="b1" value="&#10006; Eliminar">       
        </div>
    </form>
    
    
    
    </div>
</div>
