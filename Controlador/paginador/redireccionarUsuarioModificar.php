<?php
session_start();
include "../../Modelo/conectadorSQL.php";
$_SESSION['pagina']=$_GET["pag"];
$_SESSION['infoTablasAdmin']="";
$usuario = $_SESSION['id_usuario']; 

if ($_SESSION['pagina']=='modificacion de usuario')
{
//include("archivoDeModelo");
$result =mysqli_query($conectador, "select * from usuario where correo='".$usuario."' ");
}

$n=0;
while($fila=mysqli_fetch_array($result))
{
$_SESSION['infoTablasAdmin'][$n]=$fila;
	$n++;
}

header("Location:../../Vista/usuario/pages/index.php");
?>