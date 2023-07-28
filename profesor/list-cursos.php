<!DOCTYPE html>
<head>
<meta charset="utf-8">
    <title>Cursos</title>
    <link rel="stylesheet" href="../css/estilo-p.css">
<meta name="viewport" content="width=device-width, initial-scale=0.3,  maximum-scale=1">
</head>
<?php 
require_once 'header-p.php';
?>
<body>
<div class="body4">
    <form>
    <div id="filters">
    <h3>Filtros:</h3>
    <div id="mod" >
        <li>
    <input id="cb" type="radio" name="mod">
        <label for="cb">Ciclo Básico</label>
        </li>
        <li>
    <input id="ta" type="radio" name="mod">
        <label for="ta">Tecnogia de los Alimentos</label>
        </li>
        <li>
    <input id="ti" type="radio" name="mod">
        <label for="ti">Tecnicatura en Informática Profesional</label>
        </li>
    <li>
    <input id="tp" type="radio" name="mod">
        <label for="tp">Tecnicatura en Programación</label>
    </li>
        </div>
        
        <div class="box">
        <select name="">
  <option value="" >Primeros</option> 
  <option value="value1">1°1°</option> 
  <option value="value1">1°2°</option> 
  <option value="value1">1°3°</option> 
  <option value="value1">1°4°</option> 
  <option value="value2">1°5°</option>
  <option value="value3">1°6°</option>
</select> 
            
            
        <select name="">
  <option value="">Segundos</option> 
  <option value="value1">2°1°</option> 
  <option value="value1">2°2°</option> 
  <option value="value1">2°3°</option> 
  <option value="value1">2°4°</option> 
  <option value="value2">2°5°</option>
</select> 
            
            
        <select name="">
  <option value="">Terceros</option> 
  <option value="value1">3°1°</option> 
  <option value="value1">3°2°</option> 
  <option value="value1">3°3°</option> 
  <option value="value1">3°4°</option> 
  <option value="value2">3°5°</option>
</select> 
            
            
        <select name="">
  <option value="">Cuartos</option> 
  <option value="value1">4°1°</option> 
  <option value="value1">4°2°</option> 
  <option value="value1">4°3°</option> 
  <option value="value1">4°4°</option> 
  <option value="value2">4°5°</option>
</select> 
        </div>
        
        <div class="box" >
        <select name="">
  <option value="">Quintos</option> 
  <option value="value1">5°1°</option> 
  <option value="value1">5°2°</option> 
  <option value="value1">5°3°</option> 
  <option value="value1">5°4°</option> 
</select> 
            
            <select name="">
  <option value="">Sextos</option> 
  <option value="value1">6°1°</option> 
  <option value="value1">6°2°</option> 
  <option value="value1">6°3°</option> 
</select> 
            
            <select name="">
  <option value="">Séptimos</option> 
  <option value="value1">7°1°</option> 
  <option value="value1">7°2°</option> 
  <option value="value1">7°3°</option> 
</select> 
        
        </div>
        
        
        <input type="submit" class="b2" value="Buscar">
        
        </form>
    </div>
        
    
<div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
            <th>curso</th>
            <th>Especialidad</th>
            <th>Turno</th>
            <th>Ciclo lectivo</th>
            <th>Ver</th>
        </tr>
        </thead>
    <?php
        $acentos = $conexion->query("SET NAMES 'utf8'");
                        $query="SELECT * FROM curso where curso_nom LIKE '1%' ";
                        $resultado = $conexion->query($query);
                        while($row=$resultado->fetch_assoc()){
                    ?>
      
        <tr>
            <td hidden="hidden"><?php echo $row['id_curso']; ?></td>
            <td><?php echo $row['curso_nom']; ?></td>
            <td><?php echo $row['especialidad']; ?></td>
            <td><?php echo $row['turno']; ?></td>
            <td><?php echo $row['ciclo_electivo']; ?></td>
            <?php echo "<td><a href=ver_curso.php?id_curso=".$row["id_curso"].">ver curso</a></td>";?>
        </tr>
            <?php 
                        }
            ?>
    </table>
</div>    
    
   
    <?php 
   
    

    
    ?>
     <script>
    function cambiar(dni1, x1){
        
        var x = x1.value;
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function(){
            if (this.readyState == 4 && this.status == 200){
                alert("a");
            } 
        };
        xhttp.open("GET", "../mod_curso.php?dni="+dni1+"&curson_nom="+x , true);
        xhttp.send();
        
    }
    
    </script>
</div>    
    
    
    
    
    
    
    
    
    
    </div>

</body>