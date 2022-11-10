<?php
	session_start();
    include_once "db_ecommerce.php";
   
    if(isset($_REQUEST['sesion']) && $_REQUEST['sesion'] =="cerrar"){
      session_destroy();
      header("location: login.php");
    }
      if(!isset($_SESSION['emailCliente'])){
          echo'
              <script>
                  alert("Por favor debes iniciar sesión primero");
                  window.location= "login.php";
              </script>
  
          ';
      
          session_destroy();
          die();
  
      
      }

      $modulo = $_REQUEST['modulo']??'';

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La casa de la Guadaña</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->

  <!-- iCheck -->
  
  <!-- JQVMap -->
 
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
 
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="css/foto.css">
  <link rel="stylesheet" href="css\stripe.css">
 
</head>



<body>

<div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Navbar -->
                <nav class="navbar navbar-expand navbar-dark">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item d-none d-sm-inline-block">
                            <a href="cliente.php" class="nav-link">Inicio</a>
                        </li>
                        <li class="nav-item d-none d-sm-inline-block">
                            <a href="#" class="nav-link">Contacto</a>
                        </li>
                    </ul>
                    
          

                    <!-- SEARCH FORM -->
                    <form class="form-inline ml-3" action="cliente.php?modulo=productos">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar bg-gray" type="search"
                            name="nombre" placeholder="Buscar" aria-label="Search" value="<?php echo $_REQUEST['nombre']??'';?>">
                            <input type="hidden" name="modulo" value="productos">

                            <div class="input-group-append">
                                <button class="btn btn-navbar"   type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Right navbar links -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Messages Dropdown Menu -->
                        <li class="nav-item dropdown">
                            
                            <a class="nav-link" data-toggle="dropdown" href="#">
                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                <span class="badge badge-danger navbar-badge" id="badgeProducto"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" id="listaCarrito">
                                <a href="#" class="dropdown-item">
                                    <!-- Message Start -->
                                    
                                    <!-- Message End -->
                                </a>
                                
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                            </div>
                        </li>
                        <!-- Notifications Dropdown Menu -->
                        <li class="nav-item dropdown">
                            <a class="nav-link" data-toggle="dropdown" href="#">
                                
                                <i class="far fa-user" aria-hidden="true"><?php echo $_SESSION['nombreCliente']; ?></i>
                          </a>
                            
                            
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                                <!-- <span class="dropdown-item dropdown-header">15 Notifications</span>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="fas fa-envelope mr-2"></i> 4 new messages
                                    <span class="float-right text-muted text-sm">3 mins</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="fas fa-users mr-2"></i> 8 friend requests
                                    <span class="float-right text-muted text-sm">12 hours</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="fas fa-file mr-2"></i> 3 new reports
                                    <span class="float-right text-muted text-sm">2 days</span>
                                </a> -->
                                <a class="nav-link text-danger" href="login.php?accion=cerrar" title="Cerrar sesion" >
                                    <i class="fas fa-door-closed    ">Salida</i>
                                </a>    
                                <div class="dropdown-divider"></div>
                               
                                
                            </div>

                            
                        </li>
                    </ul>
                </nav>

                
                <div class="row mt-1">
                    <?php
                

                    $modulo=$_REQUEST['modulo']??'';
                    if($modulo=="buscar" || $modulo=="" ){
                        include_once 'buscar.php';
                    }

                    
                if($modulo=="productos" || $modulo=="" ){
                    include_once 'productos/productos.php';
                }
                if( $modulo=="detalleproducto" ){
                    include_once "detalleProducto.php";
                }
                if( $modulo=="carrito" ){
                    include_once "carrito.php";
                }
                if( $modulo=="envio" ){
                    include_once "envio.php";
                }
                if( $modulo=="pasarela" ){
                    include_once "pasarela.php";
                }
                if( $modulo=="factura" ){
                    include_once "factura.php";
                }
                    ?>
                </div>
                

            </div>
        </div>
    </div>

    

 <!-- jQuery -->
 <script src="plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
 
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->

  <!-- daterangepicker -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  
  <!-- Summernote -->

  <!-- overlayScrollbars -->

  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>  
<script src="js/stripe.js"></script>
<script src="https://js.stripe.com/v3/"></script>
<script src="js/ecommerce.js"></script>

</body>
</html>