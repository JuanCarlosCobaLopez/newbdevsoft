<?php
//Este archivo inicializa las variables necesarias para que cargue el sistema
session_start();
$_SESSION['pagina']='visitante';
$_SESSION['mensaje']="";
$_SESSION['id_usuario']="";
$_SESSION['infoTablasAdmin']="";
//PONER LA FECHA QUE ESTA INGRESANDO EN LA BD JUNTO AL TIPO DE DISPOSITIVO

header("Location:Vista/visitante/index.html");
?>