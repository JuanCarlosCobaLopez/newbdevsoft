<?php
session_start();
include "../../Modelo/conectadorSQL.php";
$valor=$_GET["var"];
$correo=$_GET["correo"];
mysqli_query($conectador, "UPDATE `usuario` SET `estado` = '".$valor."' WHERE `usuario`.`CORREO` = '".$correo."';");
$_SESSION['pagina']='usuarioValidado';
header("Location:../../Vista/administrador/pages/index.php");
?>