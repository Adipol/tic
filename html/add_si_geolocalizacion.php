<?php
 session_start();
include("modelo/conec.php");
date_default_timezone_set('America/La_Paz');
 $fecha= date ('Y/m/d H:i');

  $bus_idbus = $_POST[ 'bus_idbus'];
  $instalacion_idinstalacion = $_POST['instalacion_idinstalacion'];
  $usuario_idusuario = $_SESSION['id'];
  $estado_operativo_gps = $_POST['estado_operativo_gps'];
  $ubicacion = $_POST['ubicacion'];
  $imei  = $_POST['imei'];
  $numero_serie = $_POST['numero_serie'];
  $codigo_gamlp = $_POST['codigo_gamlp'];
  $cod_gamlp = $_POST['cod_gamlp'];
  $sim_card  = $_POST['sim_card'];
  $numero_sim_card = $_POST['numero_sim_card'];
  $numero_serie_sim_card = $_POST['numero_serie_sim_card'];
  $gps = $_POST['gps'];
  $gsm = $_POST['gsm'];
  $handset  = $_POST['handset'];
  $estado_handset = $_POST['estado_handset'];
  $conector_gps = $_POST['conector_gps'];
  $display_handset = $_POST['display_handset'];
  $botones_handset = $_POST['botones_handset'];
  $carcasa_handset = $_POST['carcasa_handset'];
  $porta_handset = $_POST['porta_handset'];
  $visualizacion_sistema_gps = $_POST['visualizacion_sistema_gps'];
  $observaciones  = $_POST['observaciones'];
 
   $restriccion="SELECT * FROM `bus` where  si_geoloc='1' AND idbus='$bus_idbus'";
    $res=mysql_query($restriccion);
    if(mysql_num_rows($res)>0) 
    { 
        echo " <p class='avisos'>Sistema de Geolocalizacion del Bus ya está llenado</p> <p class='avisos'><a href='javascript:history.go(-1)' class='clase1'>Volver atrás</a></p> "; 
    }
    else
    {
  $query="INSERT INTO `geolocalizacion` (`idgeolocalizacion`,`bus_idbus`,`instalacion_idinstalacion`,`usuario_idusuario`,`estado_operativo_gps`,`ubicacion`,`imei`,`numero_serie`,`codigo_gamlp`,`cod_gamlp`,`sim_card`,`numero_sim_card`,`numero_serie_sim_card`,`gps`,`gsm`,`handset`,`estado_handset`,`conector_gps`,`display_handset`,`botones_handset`,`carcasa_handset`,`porta_handset`,`visualizacion_sistema_gps`,`obs`,`fecha`)
  values(NULL,'$bus_idbus','$instalacion_idinstalacion','$usuario_idusuario','$estado_operativo_gps','$ubicacion','$imei','$numero_serie','$codigo_gamlp','$cod_gamlp','$sim_card','$numero_sim_card','$numero_serie_sim_card','$gps','$gsm','$handset','$estado_handset','$conector_gps','$display_handset','$botones_handset','$carcasa_handset','$porta_handset','$visualizacion_sistema_gps','$observaciones','$fecha')";

     if (!$result = mysql_query($query)) 
		{
			echo $query;
	        exit(mysql_error());
	    }
	  $upate= "UPDATE `bus` SET si_geoloc = 1 WHERE idbus='$bus_idbus'";
  if (!$result = mysql_query($upate)) 
		{
			echo $upate;
	        exit(mysql_error());
	    }
		header("Location: tabla_buses.php");
  }
?>


