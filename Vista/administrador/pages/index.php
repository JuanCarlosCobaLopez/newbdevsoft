<?php
session_start();
include("../../../Modelo/conectadorSQL.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Panel de administrador AudiSoft</title>
    <link rel="shortcut icon" href="../images/favicon.png">
    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Panel de administrador AudiSoft</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li class="divider"></li>
                        <li><a href="../../../Controlador/destruirSession.php"><i class="fa fa-sign-out fa-fw"></i> Salir</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
							<img src="../images/opciones.jpg" width="200" height="50"/>
                        </li>
                        <li>
                            <a href="../../../Controlador/paginador/redireccionar.php?pag=interfaz principal de administrador">
                            <i class="fa fa-dashboard fa-fw"></i> Inicio</a>
                        </li>
                        <li>
                            <a href="../../../Controlador/paginador/redireccionar.php?pag=usuarios"><i class="fa fa-table fa-fw"></i> Usuarios</a>
                        </li>
                        <li>
                            <a href="../../../Controlador/paginador/redireccionar.php?pag=calendario"><i class="fa fa-table fa-fw"></i> Cal. Academico</a>
                        </li>
                        <li>
                            <a href="../../../Controlador/paginador/redireccionar.php?pag=reservas"><i class="fa fa-table fa-fw"></i> Reservas</a>
                        </li>
                       <li>
                            <a href="../../../Controlador/paginador/redireccionar.php?pag=bitacora"><i class="fa fa-table fa-fw"></i> Bitácora</a>
                        </li>                        
                        <li>
                            <a href="../../../Controlador/paginador/redireccionar.php?pag=chat">Chat</a>
                        </li>
                        <li>
                            <a href="../../../Controlador/paginador/redireccionar.php?pag=ayuda">Ayuda</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

<?php

if ($_SESSION['id_usuario']=='')
{
header("Location:../../visitante/index.html");
}else {

if ($_SESSION['pagina']=='interfaz principal de administrador')
{
include("PanelAdmin.php");
}
if ($_SESSION['pagina']=='usuarios')
{
include("usuarios.php");
}
if ($_SESSION['pagina']=='usuarioValidado')
{
include("usuarioValidado.php");
}
if ($_SESSION['pagina']=='calendario')
{
include("calendario.php");
}
if ($_SESSION['pagina']=='reservas')
{
include("reservas.php");
}
if ($_SESSION['pagina']=='bitacora')
{
include("bitacora.php");
}
if ($_SESSION['pagina']=='chat')
{
include("chat.php");
}
if ($_SESSION['pagina']=='ayuda')
{
include("ayuda.php");
}
if ($_SESSION['pagina']=='mensaje validado')
{
include("mensajeValidado.php");
}
if ($_SESSION['pagina']=='eliminacion Bitacora Validada')
{
include("eliminacionBitacoraValidada.php");
}
if ($_SESSION['pagina']=='regUsuario')
{
include("registroUsuario.php");
}
if ($_SESSION['pagina']=='mensaje error registro usuario')
{
include("mensajeErrorRegUs.php");
}
if ($_SESSION['pagina']=='mensaje envio codigo')
{
include("mensajeEnvioCod.php");
}
if ($_SESSION['pagina']=='mensaje error validacion')
{
include("mensajeErrorValid.php");
}
if ($_SESSION['pagina']=='mensaje validacion correcta')
{
include("mensajeValid.php");
}
if ($_SESSION['pagina']=='mensaje error envio codigo')
{
include("mensajeErrorEnvioCod.php");
}

}
?>

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>
