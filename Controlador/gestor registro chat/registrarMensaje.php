<?php
include "../../Modelo/conectadorSQL.php";
session_start();
$mensaje = $_POST['mensaje'];
date_default_timezone_set('Canada/Eastern');
$fecha=date('m/d/y g:ia');

mysqli_query($conectador, "INSERT INTO `mensaje` (`id_mensaje`, `CORREO`, `fecha_mensaje`, `contenido_mensaje`) 
	VALUES (NULL, '".$_SESSION['id_usuario']."', '".$fecha."', '".$mensaje."');");

$_SESSION['pagina']='mensaje validado';

header("Location:../../Vista/usuario/pages/index.php");
?>