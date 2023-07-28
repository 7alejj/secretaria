<?php
	//guardo los select name
$profesor=$_REQUEST["profesor"];
$materia=$_REQUEST["materia"];
$curso=$_REQUEST["curso"];
//$grupo=$_REQUEST["grupo"];
//$nombre=$_REQUEST["nombre"];
$descripcion=$_REQUEST["descripcion"];
	//recibir datos del archivo
$nombre_archivo=$_FILES['archivo']['name'];
$tipo=$_FILES['archivo']['type'];
$size=$_FILES['archivo']['size'];	

//archivos que no superen 8mb
//en el if del tipo de archivo lleva application/ pq es la sintaxis
if ($size <= 83886080000) {

	if ($tipo=="application/pdf") { 

	//ruta de la carpeta destino
$carpeta_destino=$_SERVER['DOCUMENT_ROOT'] . '/sv_4/material/subir_archivo/';
	//mover archivo de la carpeta temporal a la carpeta elegida
        move_uploaded_file($_FILES['archivo']['tmp_name'], $carpeta_destino.$nombre_archivo);

//subir
include ("conexion.php");
$SQLUP= "INSERT INTO material (docente, materia, curso, descripcion, archivo) VALUES ($profesor, $materia , $curso, '$descripcion', '$nombre_archivo')";
$conexion->query($SQLUP);

echo "Se subio el material de estudio que pesa ";
echo $_FILES['archivo']['size'] ." bytes";

}
else { echo "Solo se pueden subir pdf   ";
		
}

}
else { 
	echo "el tamaño del archivo no es aceptado";
}

/*
include ("conexion.php");

$SQLUP= "INSERT INTO material (docente, materia, curso, descripcion, archivo) VALUES ($profesor, $materia , $curso, '$descripcion', '$nombre_imagen')";
$resul= $conexion->query($SQLUP);

echo "Se subio el material de estudio que pesa ";
echo $_FILES['imagen']['size'] ." bytes";
*/

?>
