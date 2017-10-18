<?php
 session_start();
include("conec.php");
date_default_timezone_set('America/La_Paz');
 $fecha= date ('Y-m-d H:i:s');

  $bus_idbus = $_POST[ 'geo_bus_idbus'];
  $instalacion_idinstalacion = $_POST['geo_instalacion_idinstalacion'];
  $usuario_idusuario = $_SESSION['id'];
  $estado_operativo_gps = $_POST['estado_operativo_gps'];
  $ubicacion = $_POST['ubicacion'];
  $imei  = $_POST['geo_imei'];
  $numero_serie = $_POST['geo_numero_serie'];
  $codigo_gamlp = $_POST['geo_codigo_gamlp'];
  $cod_gamlp = $_POST['geo_cod_gamlp'];
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
  $observaciones  = $_POST['ge_observacion'];
 
  
  $restriccion = "SELECT idgeolocalizacion FROM geolocalizacion  WHERE fecha IN (SELECT MAX(g.fecha) 
															FROM geolocalizacion g
															WHERE g.bus_idbus = '$bus_idbus'
															GROUP BY g.bus_idbus) AND bus_idbus = '$bus_idbus'
	AND  instalacion_idinstalacion='$instalacion_idinstalacion' AND  estado_operativo_gps='$estado_operativo_gps' AND  ubicacion='$ubicacion' AND  imei='$imei' AND  numero_serie='$numero_serie' AND  codigo_gamlp='$codigo_gamlp' AND  cod_gamlp='$cod_gamlp'  AND  sim_card='$sim_card'  AND  numero_sim_card='$numero_sim_card'  AND  numero_serie_sim_card='$numero_serie_sim_card'  AND  gps='$gps'  AND  gsm='$gsm'  AND  handset='$handset'  AND  estado_handset='$estado_handset'  AND  conector_gps='$conector_gps'  AND  display_handset='$display_handset'  AND  botones_handset='$botones_handset'  AND  carcasa_handset='$carcasa_handset' AND  porta_handset='$porta_handset' AND  visualizacion_sistema_gps='$visualizacion_sistema_gps'";

   $res=mysql_query($restriccion);
    if(mysql_num_rows($res)>0) 
    { 
    	
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
	 
  if (!$result = mysql_query($upate)) 
		{
			echo $upate;
	        exit(mysql_error());
	    }
		//header("Location: tabla_buses.php");
   }
?>
