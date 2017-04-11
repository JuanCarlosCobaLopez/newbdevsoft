<?php
include "../../Modelo/conectadorSQL.php";
session_start();
$telfonoUsuario = $_POST['telfonoUsuario'];
$contraseñaUsuario = $_POST['contraseñaUsuario'];
$_SESSION['pagina']='modificacion usuario validada';
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$telfonoUsuario=$_POST["telfonoUsuario"];
$password=$_POST["contraseñaUsuario"];
$descripcion=$_POST["descripcion"];
$url=$_POST["url"];
$fichero_subido = '/images/'.basename($_FILES['imagenNuevoEquipo']['name']);
$ruta = '../../Vista/usuario/images/'.basename($_FILES['imagenNuevoEquipo']['name']);
move_uploaded_file($_FILES['imagenNuevoEquipo']['tmp_name'], $ruta);

mysqli_query($conectador, "UPDATE `usuario` SET `TELEFONO`='',`CONTRASENA`='',`nombre`='$nombre',`apellido`='$apellido',
	`foto`='$fichero_subido',`descripcion`='$descripcion',`url`='$url' WHERE `usuario`.`CORREO` = '".$_SESSION['id_usuario']."';");

header("Location:../../Vista/usuario/pages/index.php");
?>