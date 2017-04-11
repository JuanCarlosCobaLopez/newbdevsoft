<?php
session_start();
include "../../Modelo/conectadorSQL.php";
$_SESSION['pagina']=$_GET["pag"];
$_SESSION['infoTablasAdmin']="";
$usuario = $_SESSION['id_usuario']; 

//VARIABLES DE ADMINISTRADOR REFERENTE A LA PAGINA
if ($_SESSION['pagina']=='interfaz principal de usuario')
{
//include("archivoDeModelo");
}
if ($_SESSION['pagina']=='chat')
{
//include("archivoDeModelo");
$result = mysqli_query($conectador, "select correo, fecha_mensaje, contenido_mensaje from mensaje;"); 
}
if ($_SESSION['pagina']=='ayuda')
{
//include("archivoDeModelo");
}

$n=0;
while($fila=mysqli_fetch_array($result))
{
$_SESSION['infoTablasAdmin'][$n]=$fila;
	$n++;
}
header("Location:../../Vista/usuario/pages/index.php");
?>