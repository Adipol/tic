<?php
 session_start();
include("conec.php");
date_default_timezone_set('America/La_Paz');
 $fecha= date ('Y-m-d H:i');

$bus_idbus = $_POST['int_bus_idbus'];
$instalacion_idinstalacion = $_POST['int_instalacion_idinstalacion'];
$usuario_idusuario =$_SESSION['id'];
$dvr_gabinete = $_POST['dvr_gabinete'];
$dvr = $_POST['dvr'];
$dvr_existencia = $_POST['dvr_existencia'];
$funcion_grabacion = $_POST['funcion_grabacion'];
$Almacenamiento = $_POST['Almacenamiento'];
$Capacidad = $_POST['Capacidad'];
$num_serie_hdd = $_POST['num_serie_hdd'];
$tornillos_rac_hdd = $_POST['tornillos_rac_hdd'];
$adaptador_rca = $_POST['adaptador_rca'];
$lambda1 = $_POST['lambda1'];
$lambda2 = $_POST['lambda2'];
$lambda2 = $_POST['lambda3'];
$lambda2 = $_POST['lambda4'];
$out1 = $_POST['out1'];
$out2 = $_POST['out2'];
$out3 = $_POST['out3'];
$out4 = $_POST['out4'];
$kl_mesclaor_video = $_POST['kl_mesclaor_video'];
$kl_out1 = $_POST['kl_out1'];
$kl_out2 = $_POST['kl_out2'];
$kl_out3 = $_POST['kl_out3'];
$kl_out4 = $_POST['kl_out4'];
$cam_com_front = $_POST['cam_com_front'];
$cam_com_cond = $_POST['cam_com_cond'];
$cam_val = $_POST['cam_val'];
$cam_puerta_sal = $_POST['cam_puerta_sal'];
$cam_retro = $_POST['cam_retro'];

$obs = $_POST['int_observacion'];
  
$restriccion = "SELECT idseguridad FROM seguridad  WHERE fecha IN (SELECT MAX(s.fecha) 
FROM seguridad s
WHERE s.bus_idbus = $bus_idbus
GROUP BY s.bus_idbus) AND bus_idbus = $bus_idbus AND  instalacion_idinstalacion='$instalacion_idinstalacion' AND  dvr_gabinete='$dvr_gabinete' AND  dvr='$dvr' AND dvr_existencia='$dvr_existencia' AND  funcion_grabacion='$funcion_grabacion' AND  Almacenamiento='$Almacenamiento' AND  Capacidad='$Capacidad' AND  num_serie_hdd='$num_serie_hdd' AND  tornillos_rac_hdd='$tornillos_rac_hdd' AND  adaptador_rca='$adaptador_rca' AND  lambda1='$lambda1' AND  lambda2='$lambda2' AND  lambda3='$lambda3' AND  lambda4='$lambda4' AND  out1='$out1' AND  out2='$out2' AND  out3='$out3' AND  out4='$out4' AND  kl_mesclaor_video='$kl_mesclaor_video' AND  kl_out1='$kl_out1' AND  kl_out2='$kl_out2' AND  kl_out3='$kl_out3' AND  kl_out4='$kl_out4' AND  cam_com_front='$cam_com_front' AND  cam_com_cond='$cam_com_cond' AND  cam_val='$cam_val' AND  cam_puerta_sal='$cam_puerta_sal' AND  cam_retro='$cam_retro'";

   $res=mysql_query($restriccion);
    if(mysql_num_rows($res)>0) 
    { 
    	
    }
    else
    {
  $query="INSERT INTO `seguridad`(`bus_idbus`, `instalacion_idinstalacion`, `usuario_idusuario`, `dvr_gabinete`, `dvr`, `dvr_existencia`, `funcion_grabacion`, `Almacenamiento`, `Capacidad`, `num_serie_hdd`, `tornillos_rac_hdd`, `adaptador_rca`, `lambda1`, `lambda2`, `lambda3`, `lambda4`, `out1`, `out2`, `out3`, `out4`, `kl_mesclaor_video`, `kl_out1`, `kl_out2`, `kl_out3`, `kl_out4`, `cam_com_front`, `cam_com_cond`, `cam_val`, `cam_puerta_sal`, `cam_retro` `obs`, `fecha`) VALUES ($bus_idbus','$instalacion_idinstalacion','$usuario_idusuario','$dvr_gabinete','$dvr' ,'$dvr_existencia','$funcion_grabacion','$Almacenamiento','$Capacidad','$num_serie_hdd','$tornillos_rac_hdd','$adaptador_rca','$lambda1','$lambda2','$lambda3','$lambda4','$out1','$out2','$out3','$out4','$kl_mesclaor_video','$kl_out1','$kl_out2','$kl_out3','$kl_out4','$cam_com_front','$cam_com_cond','$cam_val','$cam_puerta_sal','$cam_retro','$obs','$fecha')";
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


