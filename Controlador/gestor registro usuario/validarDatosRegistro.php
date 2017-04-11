<?php
/*
Este archivo verifica si el correo ya existe en la BD, si es así vuelve a la misma pagina sino comienza a actualizar la BD
y envia a la pagina de usuario
*/
session_start();
include("../../Modelo/conectadorSQL.php");
require '../../librerias/PHPMailer/PHPMailerAutoload.php';
$correo=$_POST["correo"];
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$telf=$_POST["telf"];
$password=$nombre.rand(1999, 9999).$apellido;
$descripcion=$_POST["descripcion"];
$url=$_POST["url"];
$fichero_subido = '/images/'.basename($_FILES['imagenNuevoEquipo']['name']);
$ruta = '../../Vista/usuario/images/'.basename($_FILES['imagenNuevoEquipo']['name']);
move_uploaded_file($_FILES['imagenNuevoEquipo']['tmp_name'], $ruta);
$aleatorio=uniqid();

//echo $password;
//Se hace la consulta para saber si ese correo ya esta en la BD

$queryCorreo = mysqli_query($conectador, "SELECT correo FROM usuario WHERE correo='".$correo."'");

//Si no esta...
if(mysqli_num_rows($queryCorreo)==0)
	{		
	$mail = new PHPMailer();
	$mail->isSMTP();
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'tls';//Modificar
	$mail->Host = 'smtp.gmail.com';//Modificar
	$mail->Port = '587';//Modificar
	$mail->Username = 'newbdev.soft@gmail.com'; //Modificar
	$mail->Password = 'auditorium'; //Modificar
	
	$mail->setFrom('newbdev.soft@gmail.com', 'Confirmacion de la cuenta en el Sistema de Reservas UMSS');//Modificar
	
	$mail->addAddress($correo, 'Confirmacion de la cuenta en el Sistema de Reservas UMSS');//Modificar
	
	$mail->Subject = 'LE DAMOS LA BIENVENIDA AL SISTEMA DE RESERVAS';//Modificar
	$mail->Body = 'Estos son tus datos de registro:<br>
	<br>Usuario: '.$nombre.' '.$apellido.'
	<br>Contraseña: '.$password.'
	<br>Debes activar tu cuenta pulsando este enlace: http://localhost/audisoft/Controlador/activacion.php?id='.$aleatorio.'
	<br>Gracias!
	<br>'; //Modificar
	$mail->IsHTML(true);
	
		if($mail->send()){

mysqli_query($conectador,"INSERT INTO `usuario`(`CORREO`, `TELEFONO`, `CONTRASENA`, `estado`, `nombre`, `apellido`, `foto`, `descripcion`, `url`, `codigo`) 
				VALUES ('".$correo."','".$telf."','".$password."','deshabilitado','".$nombre."','".$apellido."','".$fichero_subido."','".$descripcion."','".$url."','".$aleatorio."')");
			    header("Location:../paginador/redireccionar.php?pag=mensaje envio codigo");
			} else {
			header("Location:../paginador/redireccionar.php?pag=mensaje error envio codigo");
		}
		
	}
//Si está...   
else
	{
		//$_SESSION['pagina']='mensaje error registro usuario';
		header("Location:../paginador/redireccionar.php?pag=mensaje error registro usuario");
	}	

?>