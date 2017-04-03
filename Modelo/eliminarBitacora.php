<?php
include "conectadorSQL.php";
mysqli_query($conectador, "TRUNCATE TABLE estadistica");
$_SESSION['pagina']='eliminacion Bitacora Validada';
header("Location:../Vista/administrador/pages/index.php");
?>