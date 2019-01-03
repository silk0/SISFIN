<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Mostrar Proveedores | SISFIN</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
     <!-- Data Table JS
		============================================ -->
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
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

     <!-- Datatables -->
     <link href="vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
</head>
<SCRIPT  language=JavaScript> 
function go(){
    //validacion respectiva me da hueva
        document.form.submit();  
} 
function edit(id,nom,ape)
        {
   
         // document.getElementById("baccion2").value=id;
          document.getElementById("nombrem").value=nom;
          document.getElementById("apellidom").value=ape;
         // document.getElementById("marc").value=marca;
         // document.getElementById("num").value=num;
         // document.getElementById("descr").value=des;
         // document.getElementById("donad").value=don;
         //$("#baccion2").val(id);
          //document.getElementById("tipou").value=tip;
          //document.getElementById("esteq").value=estado;
         //$("#nomb").val(nom);
        //$("#marc").val(marca);
          //$("#num").val(num);
          //$("#donad").val(don);
          //$("#descr").val(des);
          $("#ModalInfo").modal();
        //Ya manda todos los datos correcatamente
          
          
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
										<h2>Lista de Proveedores.</h2>
										<p>Datos de Proveedores <span class="bread-ntd"><span></p>
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
  <!-- Data Table area Start-->
  <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                             </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        
                                        <th>Nombre</th>
                                        <th>Direccion</th>   
                                        <th>Telefono</th>
                                        <th>Representante</th>
                                        <th>Celular</th>
                                        <th>E-mail</th>
                                        <th>Opciones</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                      <?php
include "config/conexion.php";
$result = $conexion->query("SELECT * from tproveedor ORDER BY id_proveedor");
if ($result) {
    while ($fila = $result->fetch_object()) {
        echo "<tr>";
        echo "<td>" . $fila->nombre . "</td>";
        echo "<td>" . $fila->direccion . "</td>";
        echo "<td>" . $fila->telefono . "</td>";  
        echo "<td>" . $fila->representante . "</td>";
        echo "<td>" . $fila->celular . "</td>";
        echo "<td>" . $fila->email . "</td>";
        echo "<td>
        <div class='button-icon-btn'>
        <button class='btn btn-info info-icon-notika btn-reco-mg btn-button-mg' onclick=\"edit('$fila->id_cliente','$fila->nombre','$fila->direccion')\";><i class='notika-icon notika-search'></i></button>
        <button class='btn btn-lightgreen lightgreen-icon-notika btn-reco-mg btn-button-mg'><i class='notika-icon notika-menus'></i></button>
        </div>
        </td>";
        echo "</tr>";

    }
}
?>
                      </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->
 <!-- MODAL PARA FIADOR -->
 <div class="modal animated shake" id="ModalInfo" role="dialog">
                                    <div class="modal-dialog modal-large">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                          

        <h1>Datos del cliente</h1>
<div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-example-int">
                                    <div class="form-group">
                                        <label>Nombre:</label>
                                        <div class="nk-int-st">
                                        <input type="text" name="nombrem" id="nombrem" class="form-control input-sm" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-example-int">
                                    <div class="form-group">
                                        <label>Apellido:</label>
                                        <div class="nk-int-st">
                                        <input type="text" name="apellidom" id="apellidom" class="form-control input-sm">
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
                                           <input type="text" name="dui" class="form-control input-sm">
                                        </div>
                                     </div>                            
                                </div>
                            </div>

                             <div class="col-lg-3 col-md-3 col-sm-3 col-xs-10">
                                <div class="form-example-int mg-t-15">
                                    <div class="form-group">
                                        <label>NIT:</label>
                                        <div class="nk-int-st">
                                           <input type="text" name="nit" class="form-control input-sm">
                                        </div>
                                     </div>                            
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-10">
                                <div class="form-example-int mg-t-15">
                                    <div class="form-group">
                                        <label>Fiador</label>
                                        <div class="nk-int-st">
                                           <input type="text" name="nit" class="form-control input-sm">
                                        </div>
                                     </div>                            
                                </div>
                            </div>
                            </div>
                            <div class="form-example-int mg-t-15">
                            <div class="form-group">
                                <label>Dirección:</label>
                                <div class="nk-int-st">
                                    <input type="text" name="direc" class="form-control input-sm">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-example-int mg-t-15">
                                    <div class="form-group">
                                        <label>Teléfono:</label>
                                        <div class="nk-int-st">
                                           <input type="text" name="telefono" class="form-control input-sm">
                                        </div>
                                     </div>                            
                                </div>
                            </div>

                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" >
                                <div class="form-example-int mg-t-15">
                                    <div class="form-group">
                                        <label>Celular:</label>
                                        <div class="nk-int-st">
                                           <input type="text" name="celular" class="form-control input-sm">
                                        </div>
                                     </div>                            
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-example-int mg-t-15">
                                    <div class="form-group">
                                        <label>E-mail:</label>
                                        <div class="nk-int-st">
                                           <input type="text" name="email" class="form-control input-sm">
                                        </div>
                                     </div>                            
                                </div>
                            </div>
                        </div>



                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Save changes</button>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
            <!-- FIN PARA MODAL DE FIADOR -->
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
    <!-- plugins JS
  
    ============================================ -->
    <!-- Data Table JS
		============================================ -->
    <script src="js/data-table/jquery.dataTables.min.js"></script>
    <script src="js/data-table/data-table-act.js"></script>
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
    <!-- Datatables -->
  
    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
</body>

</html>
