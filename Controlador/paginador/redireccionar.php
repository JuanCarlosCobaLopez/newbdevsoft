<?php
session_start();
include "../../Modelo/conectadorSQL.php";
$_SESSION['pagina']=$_GET["pag"];
$_SESSION['infoTablasAdmin']="";
//VARIABLES DE ADMINISTRADOR REFERENTE A LA PAGINA
//ESTE ARCHIVO SE ENCARGA DE GESTIONAR LA REDIRECCION DE LA INFORMACION A MOSTRARSE EN TABLAS
if ($_SESSION['pagina']=='interfaz principal de administrador')
{
//include("archivoDeModelo");
}
if ($_SESSION['pagina']=='usuarios')
{
//include("archivoDeModelo");
$result = mysqli_query($conectador, "select correo, telefono, estado from usuario;"); 
}
if ($_SESSION['pagina']=='bitacora')
{
//include("archivoDeModelo");
$result = mysqli_query($conectador, "select correo, fecha_estadistica, dispositivo, pagina from estadistica;"); 
}
if ($_SESSION['pagina']=='chat')
{
//include("archivoDeModelo");
$result = mysqli_query($conectador, "select correo, fecha_mensaje, contenido_mensaje from mensaje;"); 
}
if ($_SESSION['pagina']=='mensaje error registro usuario')
{
//include("archivoDeModelo");
}
if ($_SESSION['pagina']=='ayuda')
{
//include("archivoDeModelo");
}
if ($_SESSION['pagina']=='regUsuario')
{
//include("archivoDeModelo");
}

//Cargando datos de la BD a una variable matriz
$n=0;
while($fila=mysqli_fetch_array($result))
{
$_SESSION['infoTablasAdmin'][$n]=$fila;
	$n++;
}
//echo sizeof($_SESSION['infoTablasAdmin']);
header("Location:../../Vista/administrador/pages/index.php");
?>