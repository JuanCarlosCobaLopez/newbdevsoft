<?php
/*
Archivo quee establece la conexión con la BD
*/
$conectador=mysqli_connect("Localhost","root");
mysqli_select_db($conectador,"db_audisoft");
?>