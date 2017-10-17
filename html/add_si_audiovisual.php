<?php
 session_start();
include("modelo/conec.php");
date_default_timezone_set('America/La_Paz');

  $fecha= date ('Y/m/d H:i');

  $bus_idbus= $_POST['bus_idbus'] ;
  $instalacion_idinstalacion= $_POST['instalacion_idinstalacion'];
  $usuario_idusuario =$_SESSION['id'];
  $visualizacion_grabacionkl= $_POST['visualizacion_grabacionkl'];
  $tipo_almacenamientokl= $_POST['tipo_almacenamientokl'];
  $capacidad_almacenamientokl= $_POST['capacidad_almacenamientokl'];
  $numero_serieHdd= $_POST['numero_serieHdd'];
  $estado_kl = $_POST['estado_kl'];
  $estado_display = $_POST['estado_display'];
  $touch_display= $_POST[ 'touch_display'];
  $boton_display1 = $_POST['boton_display1'];
  $boton_display_2 = $_POST['boton_display_2'];
  $boton_display_3 = $_POST['boton_display_3'];
  $boton_display_4 = $_POST['boton_display_4'];
  $estado_tv1 = $_POST['estado_tv1'];
  $cod_gamlptv1= $_POST['cod_gamlptv1'];
  $cod_gamlp1= $_POST['cod_gamlp1'];
  $numero_serietv1= $_POST['numero_serietv1'];
  $tipo_conectortv1 = $_POST['tipo_conectortv1'];
  $estado_conectortv1= $_POST['estado_conectortv1'];
  $conector_rcatv1= $_POST['conector_rcatv1'];
  $estado_tv2= $_POST['estado_tv2'];
  $cod_gamlptv2= $_POST['cod_gamlptv2'];
  $cod_gamlp2= $_POST['cod_gamlp2'];
  $numero_serietv2= $_POST['numero_serietv2'];
  $tipo_conectortv2 = $_POST['tipo_conectortv2'];
  $estado_conectortv2= $_POST['estado_conectortv2'];
  $conector_rcatv2= $_POST['conector_rcatv2'];
  $mic_conductor= $_POST['mic_conductor'];
  $brazo_mic= $_POST['brazo_mic'];
  $mic_anfitrion= $_POST['mic_anfitrion'];
  $cable_usb= $_POST['cable_usb'];
  $estado_usb= $_POST['estado_usb'];
  $observaciones= $_POST['observaciones'];

  $restriccion="SELECT * FROM `bus` where  si_audiovicual='1' AND idbus='$bus_idbus'";
    $res=mysql_query($restriccion);
    if(mysql_num_rows($res)>0) 
    { 
        echo " <p class='avisos'>Sistema de Audiovisual del Bus ya está llenado</p> <p class='avisos'><a href='javascript:history.go(-1)' class='clase1'>Volver atrás</a></p> "; 
    }
    else
    {
    $query="INSERT INTO `audiovisual`(`idaudiovisual`, `bus_idbus`, `instalacion_idinstalacion`, `usuario_idusuario`, `visualizacion_grabacionkl`, `tipo_almacenamientokl`, `capacidad_almacenamientokl`, `numero_serieHdd`, `estado_kl`, `estado_display`, `touch_display`, `boton_display1`, `boton_display_2`, `boton_display_3`, `boton_display_4`, `estado_tv1`, `cod_gamlptv1`, `cod_gamlp1`, `numero_serietv1`, `tipo_conectortv1`, `estado_conectortv1`, `conector_rcatv1`, `estado_tv2`, `cod_gamlptv2`, `cod_gamlp2`, `numero_serietv2`, `tipo_conectortv2`, `estado_conectortv2`, `conector_rcatv2`, `mic_conductor`, `brazo_mic`, `mic_anfitrion`, `cable_usb`, `estado_usb`, `obs`, `fecha`) 
    VALUES (NULL,'$bus_idbus','$instalacion_idinstalacion','$usuario_idusuario','$visualizacion_grabacionkl','$tipo_almacenamientokl','$capacidad_almacenamientokl','$numero_serieHdd','$estado_kl','$estado_display','$touch_display','$boton_display1','$boton_display_2','$boton_display_3', '$boton_display_4', '$estado_tv1', '$cod_gamlptv1','$cod_gamlp1', '$numero_serietv1', '$tipo_conectortv1', '$estado_conectortv1', '$conector_rcatv1', '$estado_tv2', '$cod_gamlptv2','$cod_gamlp2', '$numero_serietv2', '$tipo_conectortv2', '$estado_conectortv2', '$conector_rcatv2', '$mic_conductor', '$brazo_mic', '$mic_anfitrion', '$cable_usb', '$estado_usb','$observaciones', '$fecha')";
     if (!$result = mysql_query($query)) 
		{
			echo $query;
	        exit(mysql_error());
	    }
	  $upate= "UPDATE `bus` SET si_audiovicual = 1 WHERE idbus='$bus_idbus'";
  if (!$result = mysql_query($upate)) 
		{
			echo $upate;
	        exit(mysql_error());
	    }
		header("Location: tabla_buses.php");
  }
?>
