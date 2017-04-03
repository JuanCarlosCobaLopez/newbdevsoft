<?php
/*
Este archivo verifica si el correo ya existe en la BD, si es así evuelve a la misma pagina sino comienza a actualizar la BD
y envia a la pagina de usuario
*/
session_start();
include("../../Modelo/conectadorSQL.php");
$correo=$_GET["emailLogin"];
$password=$_GET["passLogin"];


if($correo=='admin@gmail.com' and $password=='123')
{

		$_SESSION['pagina']='interfaz principal de administrador';
		$_SESSION['id_usuario']=$correo;
		header("Location:../../Vista/administrador/pages/index.php");

}else{

		//Se hace la consulta para saber si ese correo ya esta en la BD
		$queryCorreo = mysqli_query($conectador, "SELECT correo FROM usuario WHERE correo='$correo' and contrasena='$password' and estado='habilitado'");
		//Si no esta...
echo mysqli_num_rows($queryCorreo);

		if(mysqli_num_rows($queryCorreo)==0)
			{
				$_SESSION['mensaje']='Datos inexistentes o usuario deshabilitado, verifique su cuenta porfavor.';
				$_SESSION['pagina']='visitante';
				header("Location:../../Vista/visitante/index.html");
			}
		//Si está...
		else
			{
				$_SESSION['pagina']='interfaz principal de usuario';
				$_SESSION['id_usuario']=$correo;
				header("Location:../../Vista/usuario/pages/index.php");
			}	

}
?>