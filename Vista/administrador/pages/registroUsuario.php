        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-clock-o fa-fw"></i> REGISTRO DE NUEVO USUARIO
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            
					<form id="formularioRegistro" name="formularioRegistro" method="get" action="../../../Controlador/gestor registro usuario/validarDatosRegistro.php">
						<h5>CORREO:</h5>
						<input class="form-control" type="email" name="correo" autocomplete="on" placeholder="Haz click aquí" required data-validation-required-message="Ingrese su correo porfavor."/>
						<h5>TELÉFONO:</h5>
						<input class="form-control" type="number" size="15" name="telf" autocomplete="on" placeholder="Haz click aquí" required data-validation-required-message="Coloque su teléfono porfavor."/>
						<h5>CONTRASEÑA:</h5>
						<input class="form-control" type="password" name="password" autocomplete="off" placeholder="Haz click aquí" required data-validation-required-message="Ingrese su contraseña porfavor."/><br>
						<input class="btn btn-success btn-lg" type="submit" name="button" id="button" value="Aceptar" class="boton" />
					</form>

                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->