        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Bitacora</h1>
                </div>
                <!-- /.col-lg-12 -->
<?php
echo   '         <a href='."'".'javascript:if (confirm("Al hacer eso quitaras los registros en la bitacora ¿Quieres hacerlo?"))
{parent.location="../../../Modelo/eliminarBitacora.php";};'."'".'class="btn btn-danger">Vaciar</a>'
?>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Información de páginas visitadas por los usuarios en el sistema.
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
 <?php
$resultado = mysqli_fetch_array(mysqli_query($conectador, "select * from estadistica"));
if($resultado[0]>0){
     echo'                     <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Usuario</th>
                                        <th>Fecha</th>
                                        <th>Dispositivo</th>
                                        <th>Pagina</th>
                                    </tr>
                                </thead>
                                <tbody>';

$c=0;
while($c<sizeof($_SESSION['infoTablasAdmin'])){
echo "<tr><td>".$_SESSION['infoTablasAdmin'][$c][0]."</td><td>".$_SESSION['infoTablasAdmin'][$c][1]."</td><td>".$_SESSION['infoTablasAdmin'][$c][2]."</td><td>".$_SESSION['infoTablasAdmin'][$c][3]."</td></tr>";
$c++;
}
      echo'                        </tbody>
                            </table>
                            <!-- /.table-responsive -->';
}else {echo 'Vaya, parece que no hay actividad en el sitio o se borro la bitacora!';}
?>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->