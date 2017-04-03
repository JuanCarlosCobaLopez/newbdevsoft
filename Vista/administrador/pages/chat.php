        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    <!-- /.panel -->
                    <div class="chat-panel panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-comments fa-fw"></i> Chat
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <ul class="chat">
<?php  

$c=0;
while($c<sizeof($_SESSION['infoTablasAdmin'])){

echo '<li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <strong class="primary-font">'.$_SESSION['infoTablasAdmin'][$c][0].'</strong>
                                            <small class="pull-right text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> '.$_SESSION['infoTablasAdmin'][$c][1].'
                                            </small>
                                        </div>
                                        <p>
                                            '.$_SESSION['infoTablasAdmin'][$c][2].'
                                        </p>
                                    </div>
                                </li>';
	$c++;
}

?>                                
                            </ul>
                        </div>
                        <!-- /.panel-body -->
                        <div class="panel-footer">

                            <div class="input-group">
                            <form method="post" action="../../../Controlador/gestor registro chat/registrarMensajeAdm.php">
                                <input id="btn-input" name="mensaje" type="text" class="form-control input-sm" placeholder="Escribe tu mensaje aqui..." />                            
                                <span class="input-group-btn">
                                    <button class="btn btn-warning btn-sm" id="btn-chat">
                                        Enviar
                                    </button>
                                </span>
                            </form>
                            </div>
                        </div>
                        <!-- /.panel-footer -->
                    </div>
                    <!-- /.panel .chat-panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->