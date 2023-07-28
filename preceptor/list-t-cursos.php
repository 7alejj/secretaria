<!DOCTYPE html>
<head>
<meta charset="utf-8">
    <title>Mis Cursos</title>
    <link rel="stylesheet" href="../css/estilo-prec.css">
<meta name="viewport" content="width=device-width, initial-scale=0.3,  maximum-scale=1">
</head>
<?php 
require_once 'header-prec.php';
?>
<div class="body5">
 
<div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
            <th>Año</th>
            <th>Especialidad</th>
            <th>Turno</th>
            <th>Ver</th>
        </tr>
        </thead>
       <?php
        
                        $query="SELECT * FROM curso ";
                        $resultado = $conexion->query($query);
                        while($row=$resultado->fetch_assoc()){
                    ?>
      
        <tr>
            <td><?php echo $row['curso_nom']; ?></td>
            <td><?php echo $row['especialidad']; ?></td>
            <td><?php echo $row['turno']; ?></td>
            <?php echo "<td><a href=ver_curso.php?id_curso=".$row["id_curso"].">ver curso</a></td>";?>
        </tr>
            <?php 
                        }
            ?>
    </table>
</div> 


</div>