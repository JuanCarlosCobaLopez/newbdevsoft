        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Usuarios</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Información de todos los usuarios registrados en el sistema.<br>
                            <a href='../../../Controlador/paginador/redireccionar.php?pag=regUsuario'>Registrar Nuevo...</a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
							<?php
								$resultado = mysqli_fetch_array(mysqli_query($conectador, "select * from usuario"));
								//echo $resultado[1][0];
								if($resultado[0]>=0){
								    echo'<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
				                                <thead>
					                                    <tr>
					                                        <th>Correo</th>
					                                        <th>Telefono</th>
					                                        <th>Estado</th>     
					                                        <th>Activar/Desactivar</th> 
					                                    </tr>
				                                </thead>
			                                <tbody>';

												$c=0;
												while($c<sizeof($_SESSION['infoTablasAdmin'])){
													if($_SESSION['infoTablasAdmin'][$c][2]=='habilitado'){
													echo "<tr><td>".$_SESSION['infoTablasAdmin'][$c][0]."</td><td>".$_SESSION['infoTablasAdmin'][$c][1]."</td><td>".$_SESSION['infoTablasAdmin'][$c][2]."</td>
													<td><a href='../../../Controlador/activadorDesactivador/activarDesactivar.php?var=deshabilitado&correo=".$_SESSION['infoTablasAdmin'][$c][0]."'>Desactivar</a></td></tr>";
													}else{
													echo "<tr><td>".$_SESSION['infoTablasAdmin'][$c][0]."</td><td>".$_SESSION['infoTablasAdmin'][$c][1]."</td><td>".$_SESSION['infoTablasAdmin'][$c][2]."</td>
													<td><a href='../../../Controlador/activadorDesactivador/activarDesactivar.php?var=habilitado&correo=".$_SESSION['infoTablasAdmin'][$c][0]."'>Activar</a></td></tr>";	
													}	

													$c++;
												}
									echo'   </tbody>
									     </table>
									     <!-- /.table-responsive -->';
								}else {echo 'Vaya, parece que nadie registró un usuario!';}
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