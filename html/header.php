<?php
session_start();
$nombre=$_SESSION['nombre'];
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>TIC's - Relevamiento</title>
    <!-- Bootstrap Core CSS -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <link href="bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <!-- Menu CSS -->
  
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/blue-dark.css" id="theme" rel="stylesheet">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header"> 
            <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars"></i></a>
                <div class="top-left-part"><a class="logo" href="index.html"><b><img src="../plugins/images/tecnologias-logo.png" alt="home" /></b><span class="hidden-xs"><img src="../plugins/images/tic.png" alt="home" /></span></a></div>
                <ul class="nav navbar-top-links navbar-left m-l-20 hidden-xs">
                    <li>
                        <form role="search" class="app-search hidden-xs">

                            <input id="filtrar"  type="text" placeholder="Buscar..." class="form-control"> 
                        </form>
                    </li>
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                <li>
                        <a class="profile-pic" href="modelo/session_destroy.php"><b class="hidden-xs">Cerrar</b>  </a>
                    </li>
                    <li>
                        <a class="profile-pic" href="#"><img src="../plugins/images/users/varun.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs"><?php echo $nombre;?></b> </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- Left navbar-header -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
            <ul class="nav" id="side-menu">
                    <li style="padding: 10px 0 0;">
                        <a href="estadistica.php" class="waves-effect"><i class="fa fa-bar-chart-o fa-fw" aria-hidden="true"></i><span class="hide-menu">Estadistica</span></a>
                    </li>
                     <li >
                        <a href="reportes.php" class="waves-effect"><i class="fa fa-bar-chart-o fa-fw" aria-hidden="true"></i><span class="hide-menu">Reportes</span></a>
                    </li>
                    <li >
                        <a href="tabla_buses.php" class="waves-effect"><i class="fa fa-car fa-fw" aria-hidden="true"></i><span class="hide-menu">Buses</span></a>
                    </li>
                     <li >
                        <a href="editar_bus.php" class="waves-effect"><i class="fa fa-car fa-fw" aria-hidden="true"></i><span class="hide-menu">Editar Bus</span></a>
                    </li>
                    <li >
                        <a href="tabla_cobro.php" class="waves-effect"><i class="fa  fa-building fa-fw" aria-hidden="true"></i><span class="hide-menu">Sist. de Cobro</span></a>
                    </li>
                    <li >
                        <a href="tabla_acceso.php" class="waves-effect"><i class="fa fa-child fa-fw" aria-hidden="true"></i><span class="hide-menu">Sist. de Acceso</span></a>
                    </li>
                    <li >
                        <a href="tabla_geolocalizacion.php" class="waves-effect"><i class="fa fa-map-marker fa-fw" aria-hidden="true"></i><span class="hide-menu">Sist. de Geoloc.</span></a>
                    </li>
                    <li >
                        <a href="tabla_seguridad.php" class="waves-effect"><i class="fa fa-eye fa-fw" aria-hidden="true"></i><span class="hide-menu">Sist. de Seguridad</span></a>
                    </li> 
                    <li >
                        <a href="tabla_audiovisual.php" class="waves-effect"><i class="fa fa-caret-square-o-right fa-fw" aria-hidden="true"></i><span class="hide-menu">Sist. Audiovisual</span></a>
                    </li>
                    <li>
                        <a href="tabla_internet.php" class="waves-effect"><i class="fa fa fa-edge fa-fw" aria-hidden="true"></i><span class="hide-menu">Sist. de Internet</span></a>
                    </li>
                    <li>
                        <a href="tabla_electrico.php" class="waves-effect"><i class="fa fa-bolt fa-fw" aria-hidden="true"></i><span class="hide-menu">Sist. Electrico</span></a>
                    </li>                   
                </ul>
            </div>

        </div>


        <!-- Left navbar-header end -->