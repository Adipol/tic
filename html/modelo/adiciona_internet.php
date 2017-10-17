<?php
 session_start();
include("conec.php");
date_default_timezone_set('America/La_Paz');
 $fecha= date ('Y-m-d H:i');

$bus_idbus = $_POST['int_bus_idbus'];
$instalacion_idinstalacion = $_POST['int_instalacion_idinstalacion'];
$usuario_idusuario =$_SESSION['id'];
$estado = $_POST['estado'];
$router_existencia = $_POST['router_existencia'];
$rout_num_serie = $_POST['rout_num_serie'];
$rout_num_imei = $_POST['rout_num_imei'];
$rout_estado = $_POST['rout_estado'];
$rout_ubicacion = $_POST['rout_ubicacion'];
$rout_cargador = $_POST['rout_cargador'];
$sim = $_POST['int_sim'];
$sim_ubicacion = $_POST['sim_ubicacion'];
$sim_numero = $_POST['sim_numero'];
$sim_serie = $_POST['sim_serie'];
$abrazaderas = $_POST['abrazaderas'];
$cloud = $_POST['cloud'];
$cloud_estado = $_POST['cloud_estado'];
$cloud_numero = $_POST['cloud_numero'];
$cloud_serie = $_POST['cloud_serie'];
$cloud_cargador = $_POST['cloud_cargador'];
$obs = $_POST['int_observacion'];
  
$restriccion = "SELECT idinternet FROM internet  WHERE fecha IN (SELECT MAX(e.fecha) 
FROM internet e
WHERE e.bus_idbus = $bus_idbus
GROUP BY e.bus_idbus) AND bus_idbus = $bus_idbus AND  instalacion_idinstalacion='$instalacion_idinstalacion' AND  estado='$estado' AND  rout_num_serie='$rout_num_serie' AND router_existencia='$router_existencia' AND  rout_num_imei='$rout_num_imei' AND  rout_estado='$rout_estado' AND  rout_ubicacion='$rout_ubicacion' AND  rout_cargador='$rout_cargador' AND  sim='$sim' AND  sim_ubicacion='$sim_ubicacion' AND  sim_numero='$sim_numero' AND  sim_serie='$sim_serie' AND  abrazaderas='$abrazaderas' AND  cloud='$cloud' AND  cloud_estado='$cloud_estado' AND  cloud_numero='$cloud_numero' AND  cloud_serie='$cloud_serie' AND  cloud_cargador='$cloud_cargador'";

   $res=mysql_query($restriccion);
    if(mysql_num_rows($res)>0) 
    { 
    	
    }
    else
    {
  $query="INSERT INTO `internet`(`idInternet`, `bus_idbus`, `instalacion_idinstalacion`, `usuario_idusuario`, `estado`, `router_existencia`, `rout_num_serie`, `rout_num_imei`, `rout_estado`, `rout_ubicacion`, `rout_cargador`, `sim`, `sim_ubicacion`, `sim_numero`, `sim_serie`, `abrazaderas`, `cloud`, `cloud_estado`, `cloud_numero`, `cloud_serie`, `cloud_cargador`, `obs`, `fecha`) VALUES ('','$bus_idbus','$instalacion_idinstalacion','$usuario_idusuario','$estado','$router_existencia' ,'$rout_num_serie','$rout_num_imei','$rout_estado','$rout_ubicacion','$rout_cargador','$sim','$sim_ubicacion','$sim_numero','$sim_serie','$abrazaderas','$cloud','$cloud_estado','$cloud_numero','$cloud_serie','$cloud_cargador','$obs','$fecha')";
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


