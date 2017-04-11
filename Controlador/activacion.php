<?php
/*
Valdador por correo
*/
session_start();
include("../Modelo/conectadorSQL.php");
$codigo=$_GET["id"];
//Se hace la consulta para saber si ese correo ya esta en la BD
echo $codigo;

$queryCodigo = mysqli_query($conectador, "SELECT correo FROM usuario WHERE codigo='".$codigo."'");

if(mysqli_num_rows($queryCodigo)==0)
	{

		header("Location: ../Vista/visitante/validacionInCorrecta.html");
		
	}

else
	{
		mysqli_query($conectador,"UPDATE `usuario` SET `estado` = 'habilitado' WHERE codigo='".$codigo."';");
		header("Location: ../Vista/visitante/validacionCorrecta.html");
	}	

?>