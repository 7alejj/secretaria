<?php 

	include "conexion.php";

		
		$apellido=$_POST['apellido'];
        $nombre=$_POST['nombre'];
		$dni=$_POST['dni'];
		$direccion=$_POST['direccion'];
		$localidad=$_POST['localidad'];
        $cp=$_POST['cp'];
        $nacionalidad=$_POST['nacionalidad'];
		$lugar=$_POST['lugar'];
		$fecha=$_POST['fecha'];
		$sexo=$_POST['sexo'];
		$mail=$_POST['mail'];
        $telefono=$_POST['telefono'];
		$usuario=$_POST['usuario'];
		$clave=$_POST['clave'];

		if(buscaRepetido($conexion,$usuario)==0){
			$sql="INSERT INTO persona (apellido,nombre,dni,direccion,localidad,codigo_postal,nacionalidad,lugar_nacimiento,fecha_nacimiento,sexo,e_mail,telefono,usuario,clave,nivel)
				VALUES ('$apellido','$nombre',$dni,'$direccion',$localidad,$cp,'$nacionalidad','$lugar','$fecha','$sexo','$mail',$telefono,'$usuario','$clave',1)";
			echo $result=mysqli_query($conexion,$sql);
		}else{
			echo 2;
           
		}


		function buscaRepetido($conexion,$user){
			$sql="SELECT * FROM persona WHERE usuario='$user'";
			$result=mysqli_query($conexion,$sql);

			if(mysqli_num_rows($result) > 0){

				return 1;
			}else{
				return 0;
			}
		}

 ?>