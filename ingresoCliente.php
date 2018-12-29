<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ingreso de Clientes | SISFIN</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bootstrap select CSS
		============================================ -->
        <link rel="stylesheet" href="css/bootstrap-select/bootstrap-select.css">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- font awesome CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- Notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/notika-custom-icon.css">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="css/wave/waves.min.css">
    <link rel="stylesheet" href="css/wave/button.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<SCRIPT  language=JavaScript> 
function go(){
    //validacion respectiva me da hueva
        document.form.submit();  
} 
function enviar(id){
    
    $.ajax({
        data:{"id":id},
        url: 'scriptsphp/recuperarFiador.php',
        type: 'post',
        beforeSend: function(){
            alert("Por favr espere...");
        },
        success: function(response){
            alert(response);
            document.getElementById("fiador").value=response;
            document.getElementById("idfiador").value=id;
        }
    });
} 

</script> 
<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    
      <!-- Start Header Top Area -->
    <?php include "header.php"; ?>
        <!-- End Header Top Area -->

    <!-- Mobile Menu start -->
    <?php include "menumobil.php"; ?>
    <!-- Mobile Menu end -->

    <!-- Main Menu area start-->
    <?php include "menuprincipal.php"; ?>
    <!-- Main Menu area End-->
	<!-- Breadcomb area Start-->
	<div class="breadcomb-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="breadcomb-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="breadcomb-wp">
									<div class="breadcomb-icon">
										<i class="notika-icon notika-form"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2>Rgistro de cliente.</h2>
										<p>Formulario de datos personales <span class="bread-ntd">para un nuevo cliente.</span></p>
									</div>
								</div>
							</div>
							<!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">
									<button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="notika-icon notika-sent"></i></button>
								</div>
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcomb area End-->
    <!-- Form Examples area start-->
    <div class="form-example-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-example-wrap">
                        <div class="cmp-tb-hd">
                            <h2>Datos del Cliente</h2>
                            
                        </div>
                        <form name="form" method="post" action="ingresoCliente.php?bandera=1">
                        <input type="hidden" id="idfiador" name="idfiador">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-example-int">
                                    <div class="form-group">
                                        <label>Nombre:</label>
                                        <div class="nk-int-st">
                                        <input type="text" name="nombre" class="form-control input-sm" placeholder="Ingrese su nombre." >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-example-int">
                                    <div class="form-group">
                                        <label>Apellido:</label>
                                        <div class="nk-int-st">
                                        <input type="text" name="apellido" class="form-control input-sm" placeholder="Ingrese su apellido.">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="form-example-int mg-t-15">
                                    <div class="form-group">
                                        <label>DUI:</label>
                                        <div class="nk-int-st">
                                           <input type="text" name="dui" class="form-control input-sm" data-mask="99999999-9" placeholder="Ingrese su DUI.">
                                        </div>
                                     </div>                            
                                </div>
                            </div>

                             <div class="col-lg-3 col-md-3 col-sm-3 col-xs-10">
                                <div class="form-example-int mg-t-15">
                                    <div class="form-group">
                                        <label>NIT:</label>
                                        <div class="nk-int-st">
                                           <input type="text" name="nit" class="form-control input-sm" data-mask="9999-999999-999-9" placeholder="Ingrese su NIT.">
                                        </div>
                                     </div>                            
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-10">
                                <div class="form-example-int mg-t-15">
                                    <div class="form-group">
                                        <label>Fiador:</label>
                                        <div class="nk-int-st">
                                           <input type="text" name="fiador" id="fiador" class="form-control input-sm"  placeholder="Nombre del fiador." readonly>
                                           
                                        </div>
                                     </div>                            
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-10">
                               <div class="">
                                   <br>
									<button  type="button" data-toggle="modal" data-target="#myModalone" class="btn btn-success success-icon-notika btn-reco-mg btn-button-mg waves-effect"><i class="notika-icon notika-house"></i></button>
								</div>
                            </div>
                            
                        </div>
                        
                        <div class="form-example-int mg-t-15">
                            <div class="form-group">
                                <label>Dirección:</label>
                                <div class="nk-int-st">
                                    <input type="text" name="direc" class="form-control input-sm" placeholder="Ingrese su dirección." required>
                                </div>
                            </div>
                        </div>
                        
                        
                        <!-- FILA PARA DATOS CORTOS -->
                        
                         <!-- FIN DE FILA PARA DATOS CORTOS -->
                      
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-example-int mg-t-15">
                                    <div class="form-group">
                                        <label>Teléfono:</label>
                                        <div class="nk-int-st">
                                           <input type="text" name="telefono" class="form-control input-sm" data-mask="9999-9999" placeholder="Ingrese Telefono." required>
                                        </div>
                                     </div>                            
                                </div>
                            </div>

                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" >
                                <div class="form-example-int mg-t-15">
                                    <div class="form-group">
                                        <label>Celular:</label>
                                        <div class="nk-int-st">
                                           <input type="text" name="celular" class="form-control input-sm" data-mask="9999-9999" placeholder="Ingrese Celular." required>
                                        </div>
                                     </div>                            
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-example-int mg-t-15">
                                    <div class="form-group">
                                        <label>E-mail:</label>
                                        <div class="nk-int-st">
                                           <input type="text" name="email" class="form-control input-sm" placeholder="Ingrese el E-mail">
                                        </div>
                                     </div>                            
                                </div>
                            </div>
                        </div>
                        <!-- salrios-->
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                
                                <label>Tipo de Ingreso</label>
                               
                                <div class="bootstrap-select fm-cmp-mg">
                                    <select class="selectpicker" data-live-search="true" name="tipo">
											<option>Salario</option>
											<option>Remesa</option>
											
										</select>
                                </div>
                            </div>

                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" >
                                <div class="form-example-int mg-t-15">
                                    <div class="form-group">
                                        <label>Profecion u oficio</label>
                                        <div class="nk-int-st">
                                           <input type="text" name="profecion" class="form-control input-sm" data-mask="9999-9999" placeholder="Ingrese Profecion u oficio" required>
                                        </div>
                                     </div>                            
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-example-int mg-t-15">
                                    <div class="form-group">
                                        <label>Salario</label>
                                        <div class="nk-int-st">
                                           <input type="text" name="salario" class="form-control input-sm" placeholder="Ingrese salario">
                                        </div>
                                     </div>                            
                                </div>
                            </div>
                        </div>
                        
                            
                        <div class="row">
                            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                <div class="floating-numner form-rlt-mg">
                                    <p>Observaciones:</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <div class="nk-int-st">
                                        <textarea class="form-control" name="observ" rows="5" placeholder="Escriba aquí las observaciones deseadas acerca del cliente..."></textarea required>
                                    </div>
                                </div>
                            </div>
                        </div>
                       <!-- <div class="form-example-int mg-t-15">
                            <div class="fm-checkbox">
                                <label><input type="checkbox" name="estado" class="i-checks"> <i></i> Estado.</label>
                                <label for="">Checkee para activar</label>
                            </div>
                        </div>-->
                        
                        <div class="form-example-int mg-t-15">
                            <button class="btn btn-success notika-btn-success" onclick="go();">Guardar.</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
           <!-- MODAL PARA FIADOR -->
           <div class="modal animated shake" id="myModalone" role="dialog">
                                    <div class="modal-dialog modal-large">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                               <!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2>Seleccione uno de los fiadores de la sigueinte tabla.</h2>
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Dui</th>
                                        <th>Enviar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <?php
include "config/conexion.php";
$result = $conexion->query("SELECT * from tfiador ORDER BY id_fiador");
if ($result) {
    while ($fila = $result->fetch_object()) {
        echo "<tr>";
        echo "<td>" . $fila->nombre . "</td>";
        echo "<td>" . $fila->apellido . "</td>";
        echo "<td>" . $fila->dui . "</td>";  
        
        echo "<td>
        <div class='button-icon-btn'>
        <button class='btn btn-info info-icon-notika btn-reco-mg btn-button-mg' data-dismiss='modal' onclick=\"enviar('$fila->id_fiador')\";><i class='notika-icon notika-next'></i></button>
        </div>
        </td>";
        echo "</tr>";

    }
}
?>
                                
                                   
                                    
                                </tbody>
                                <tfoot>
                                    <tr>
                                       
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Dui</th>
                                        <th>Enviar</th>
                                       
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->
</div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Listo</button>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
            <!-- FIN PARA MODAL DE FIADOR -->
            
            
    </div>
    <!-- Form Examples area End-->
    <!-- Start Footer area-->
    <?php include "footer.php";?>
    <!-- End Footer area-->
    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
		============================================ -->
    <script src="js/flot/jquery.flot.js"></script>
    <script src="js/flot/jquery.flot.resize.js"></script>
    <script src="js/flot/flot-active.js"></script>
    <!-- knob JS
		============================================ -->
    <script src="js/knob/jquery.knob.js"></script>
    <script src="js/knob/jquery.appear.js"></script>
    <script src="js/knob/knob-active.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="js/icheck/icheck.min.js"></script>
    <script src="js/icheck/icheck-active.js"></script>
    <!--  wave JS
		============================================ -->
    <script src="js/wave/waves.min.js"></script>
    <script src="js/wave/wave-active.js"></script>
    <!--  Chat JS
		============================================ -->
    <script src="js/chat/jquery.chat.js"></script>
    <!--  todo JS
		============================================ -->
    <script src="js/todo/jquery.todo.js"></script>
     <!-- Data Table JS
		============================================ -->
        <script src="js/data-table/jquery.dataTables.min.js"></script>
    <script src="js/data-table/data-table-act.js"></script>
    <!-- plugins JS
		============================================ -->
        
    <script src="js/plugins.js"></script>
        <!-- Input Mask JS
		============================================ -->
    <script src="js/jasny-bootstrap.min.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
	<!-- tawk chat JS
		============================================ -->
    <!-- <script src="js/tawk-chat.js"></script> -->
 <!-- bootstrap select JS
		============================================ -->
        <script src="js/bootstrap-select/bootstrap-select.js"></script>

    
</body>

</html>
<?php
include "config/conexion.php";
$accion = $_REQUEST['bandera'];
if($accion==1){
$nombre   = $_POST['nombre'];
$apellido   = $_POST['apellido'];
$direccion   = $_POST['direc'];
$fiador= $_POST['idfiador'];
$dui  = $_POST['dui'];
$nit   = $_POST['nit'];
$email   = $_POST['email'];
$tel   = $_POST['telefono'];
$cel  = $_POST['celular'];
$tipo=$_POST['tipo'];
$prof=$_POST['profecion'];
$salario=$_POST['salario'];
$observ  = $_POST['observ'];
    $consulta  = "INSERT INTO tclientes VALUES('null','4','" .$fiador. "','" .$nombre. "','" .$apellido. "','" .$direccion. "','" .$dui. "','" .$nit. "','" .$prof. "','" .$tipo. "','" .$salario. "','" .$tel. "','" .$cel. "','" .$email. "','" .$observ. "')";
    $resultado = $conexion->query($consulta);
      if ($resultado) {
          msg("Se agregaron los datos correctamente");
      } else {
          msg("Error al insertar los datos");
      }
}
function msg($texto)
{
    echo "<script type='text/javascript'>";
    echo "alert('$texto');";
    echo "document.location.href='ingresoCliente.php';";
    echo "</script>";
}
?>