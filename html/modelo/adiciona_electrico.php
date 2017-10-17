<?php
 session_start();
include("conec.php");
date_default_timezone_set('America/La_Paz');
 $fecha= date ('Y-m-d H:i');

  $bus_idbus= $_POST['elec_bus_idbus'];
  $instalacion_idinstalacion= $_POST['elec_instalacion_idinstalacion'];
  $usuario_idusuario= $_SESSION['id'];
  $inversor= $_POST['inversor'];
  $serie_inversor= $_POST['serie_inversor'];
  $codigo_gamlp= $_POST['elec_codigo_gamlp'];
  $cod_gamlp= $_POST['elec_cod_gamlp']; 
  $toma_energia_conductor= $_POST['toma_energia_conductor']; 
  $cableado_energia= $_POST['cableado_energia']; 
  $estado_inversor= $_POST['estado_inversor']; 
  $observaciones= $_POST['e_observacion'];
  
  $restriccion = "SELECT idelectrico FROM electrico  WHERE fecha IN (SELECT MAX(e.fecha) 
															FROM electrico e
															WHERE e.bus_idbus = $bus_idbus
															GROUP BY e.bus_idbus) AND bus_idbus = $bus_idbus
	AND  instalacion_idinstalacion='$instalacion_idinstalacion' AND  inversor='$inversor' AND  serie_inversor='$serie_inversor' AND  codigo_gamlp='$codigo_gamlp' AND  cod_gamlp='$cod_gamlp' AND  toma_energia_conductor='$toma_energia_conductor' AND  cableado_energia='$cableado_energia'  AND  estado_inversor='$estado_inversor'";

   $res=mysql_query($restriccion);
    if(mysql_num_rows($res)>0) 
    { 
    	
    }
    else
    {
  $query="INSERT INTO `electrico`(`idelectrico`,`bus_idbus`,`instalacion_idinstalacion`,`usuario_idusuario`,`inversor`,`serie_inversor`,`codigo_gamlp`,`cod_gamlp`,`toma_energia_conductor`,`cableado_energia`,`estado_inversor`,`obs`,`fecha`)
  values(NULL,'$bus_idbus','$instalacion_idinstalacion','$usuario_idusuario','$inversor','$serie_inversor','$codigo_gamlp','$cod_gamlp','$toma_energia_conductor','$cableado_energia','$estado_inversor','$observaciones','$fecha')"; 
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


