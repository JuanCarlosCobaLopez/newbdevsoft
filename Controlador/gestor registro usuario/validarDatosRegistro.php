<?php
/*
Este archivo verifica si el correo ya existe en la BD, si es así evuelve a la misma pagina sino comienza a actualizar la BD
y envia a la pagina de usuario
*/
session_start();
include("../../Modelo/conectadorSQL.php");
$correo=$_GET["correo"];
$telf=$_GET["telf"];
$password=$_GET["password"];
//Se hace la consulta para saber si ese correo ya esta en la BD
$queryCorreo = mysqli_query($conectador, "SELECT correo FROM usuario WHERE correo='".$correo."'");
//Si no esta...
if(mysqli_num_rows($queryCorreo)==0)
	{
		mysqli_query($conectador,"INSERT INTO `usuario` (`CORREO`, `TELEFONO`, `CONTRASENA`, `ESTADO`) VALUES ('".$correo."', '".$telf."', 
			'".$password."', 'habilitado');");
		//$_SESSION['pagina']='usuarios';
		header("Location:../paginador/redireccionar.php?pag=usuarios");
	}
//Si está...   
else
	{
		//$_SESSION['pagina']='mensaje error registro usuario';
		header("Location:../paginador/redireccionar.php?pag=mensaje error registro usuario");
	}	
?>