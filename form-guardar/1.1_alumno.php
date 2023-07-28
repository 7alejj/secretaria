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

<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    </head>
<body>
    <center>
    <form method="GET" name="form_alum" action="1.2_opg.php">
        <table>
        <tr><td>DNI</td>
            <td> <input name="dni" REQUIERED </td>
            </tr>
            <tr>
            <td>Apellido</td>
            <td><input name="apellido"> </td>
            </tr><tr>
        <tr><td>Nombre</td>
            <td> <input name="nombre" REQUIERED </td>
            </tr>
            <td>Dirección</td>
            <td><input name="direccion"> </td>
            </tr><tr>
            <td>Localidad</td>
            <td><select name="localidad">
		<?php
		//mientras tenga registros la variable "respuesta"
		//se guarda en la variable "dato" cada uno de los campos

            while($dato=$respuesta->fetch_assoc()){
	//genera los option dependiendo de los datos de la tabla categoria
	echo "<option value='".$dato["id_localidad"]."'>".$dato["nombre"]."</option>";
}		

?>
		</select></td>
            </tr><tr>
            <td>Código Postal</td>
            <td><input name="codigo_postal"></td>
            </tr><tr>
            <td>Nacionalidad</td>
            <td><input name="nacionalidad"></td>
            </tr><tr>
            <td>Lugar nacimiento</td>
            <td><input name="lugar_nacimiento"></td>
            </tr><tr>
            <td>Fecha nacimiento</td>
            <td><input type="date" name="fecha_nacimiento"></td>
            </tr><tr>
            <td>Sexo</td>
            <td><input name="sexo"></td>
            </tr><tr>
            <td>Dirección de Correo</td>
            <td><input name="e_mail"></td>
            </tr><tr>
            <td>Télefono</td>
            <td><input name="telefono" ></td>
            </tr><tr>
            <td>Celular</td>
            <td><input name="celular"></td>
            </tr><tr>
          <td >  
              <input type="reset"  value=" &#10006 "></td><td>
	   <input type="submit"  value=" Registrar "/></td>
        </tr> 
            
        </table>
        
        
        </form>
    
    </center>
    
    
    </body>
</html>