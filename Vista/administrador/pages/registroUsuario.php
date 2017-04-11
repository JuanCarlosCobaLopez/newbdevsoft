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
                            
					<form id="formularioRegistro" enctype="multipart/form-data" name="formularioRegistro" method="post" action="../../../Controlador/gestor registro usuario/validarDatosRegistro.php">
						<h5>CORREO:</h5>
						<input class="form-control" type="email" name="correo" autocomplete="on" placeholder="Haz click aquí" required data-validation-required-message="Ingrese su correo porfavor."/>
						<h5>NOMBRE:</h5>
						<input type="text" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" name= "nombre" class="form-control" placeholder="Nombres" id="nombres" required data-validation-required-message="Por favor ingresa los nombres.">
						<h5>APELLIDO:</h5>
			            <input type="text" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" name="apellido" class="form-control" placeholder="Apellidos" id="apellidos" required data-validation-required-message="Por favor ingresa los apellidos.">
						<h5>TELÉFONO:</h5>
						<input class="form-control" type="number" size="15" name="telf" autocomplete="on" placeholder="Haz click aquí" required data-validation-required-message="Coloque su teléfono porfavor."/>						
						<h5>IMAGEN:</h5>
						<input type="hidden" name="MAX_FILE_SIZE" value="10000000000" />
						<input name="imagenNuevoEquipo" type="file" />
						<h5>DESCRIPCION:</h5>	
						<input type="text" class="form-control" name="descripcion" placeholder="Descripcion" />
						<h5>URL:</h5>	
						<input type="text" class="form-control" name="url" placeholder="Direccion web" />
						<br>
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