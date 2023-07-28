<!DOCTYPE html>
<head>
<meta charset="utf-8">
    <title>Profesores</title>
    <link rel="stylesheet" href="../css/estilo-p.css">
<meta name="viewport" content="width=device-width, initial-scale=0.3,  maximum-scale=1">
</head>
<?php 
require_once 'header-p.php';
?>
<div class="body4">
    <div id="body-i1">
    <h3>Profesores en el sistema </h3>
        
        <form>
        <div  id="filter1">
            <h4>Filtrar por DNI:</h4>
            <input type="text" placeholder="   Ingresar aquí" ><input type="submit" class="b3">
            </div>
        
        </form>
    
    </div>

<div class="table-wrapper">
 <table class="fl-table">
        <thead>
        <tr>
            <th>Apellido</th>
            <th>Nombre</th>
            <th>dni</th>
            <th>nivel</th>
            <th>Ver Más</th>
        </tr>
        </thead>
       <?php
        
            $query="SELECT id_persona,apellido,nombre,dni,nivel FROM persona WHERE nivel=2";
            $resultado = $conexion->query($query);
             while($row=$resultado->fetch_assoc()){
                    ?>
      
        <tr>
            <td hidden="hidden"><?php echo $row['od_persona']; ?></td>
            <td><?php echo $row['apellido']; ?></td>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['dni']; ?></td>
            <td><?php echo $row['nivel']; ?></td>
            
            <td><a class="a-p1" href="profe-user.php?id=<?php echo $row['id_persona']; ?>" >Ver</a></td>
        </tr>
            <?php 
                        }
            ?>
    </table>
    
    
</div>  
</div>
    