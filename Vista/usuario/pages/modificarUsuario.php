        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Modificar mi perfil de usuario</h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-4 col-lg-offset-2">


<form id="form1" name="form1" enctype="multipart/form-data" method="post" action="../../../Controlador/gestor modificador usuarios/modificadorUsuarios.php">
<h5>NOMBRE DE USUARIO:</h5>
<h4><?php echo '"'.$_SESSION['id_usuario'].'"';?></h4>
<h5>NOMBRE:</h5>
<input type="text" style="text-transform:uppercase;" name= "nombre" value=<?php echo '"'.$_SESSION['infoTablasAdmin'][0][4].'"';?> onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" placeholder="Nombres" id="nombres" required data-validation-required-message="Por favor ingresa los nombres.">
<h5>APELLIDO:</h5>
<input type="text" style="text-transform:uppercase;" name="apellido" value=<?php echo '"'.$_SESSION['infoTablasAdmin'][0][5].'"';?> onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" placeholder="Apellidos" id="apellidos" required data-validation-required-message="Por favor ingresa los apellidos.">
<h5>TELEFONO:</h5>
<input class="form-control" type="text" name="telfonoUsuario" autocomplete="on" value=<?php echo '"'.$_SESSION['infoTablasAdmin'][0][1].'"';?> />
<h5>CONTRASEÑA:</h5>
<input class="form-control" type="password" name="contraseñaUsuario" autocomplete="on" value=<?php echo '"'.$_SESSION['infoTablasAdmin'][0][2].'"';?> />
<h5>IMAGEN:</h5>
<?php echo "<a target='_blank' href='../../usuario".$_SESSION['infoTablasAdmin'][0][6]."'>Mostrar</a>"; ?>

<input type="hidden" name="MAX_FILE_SIZE" value="10000000000" />
<input name="imagenNuevoEquipo" type="file" />
<h5>DESCRIPCION:</h5>	
<input type="text" class="form-control" autocomplete="on" value=<?php echo '"'.$_SESSION['infoTablasAdmin'][0][7].'"';?> name="descripcion" placeholder="Descripcion" />
<h5>URL:</h5>	
<input type="text" class="form-control" autocomplete="on" value=<?php echo '"'.$_SESSION['infoTablasAdmin'][0][8].'"';?> name="url" placeholder="Direccion web" />
<br>
<input class="btn btn-success btn-lg" type="submit" name="button" id="button" value="Aceptar" class="boton" />
</form>


                </div>
                <!-- /.col-lg-12 -->

            </div>
        </div>
        <!-- /#page-wrapper -->
