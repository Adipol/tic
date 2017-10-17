 <?php
 session_start();
include("modelo/conec.php");
date_default_timezone_set('America/La_Paz');
  $fecha= date ('Y-m-d H:i');
  $bus_idbus= $_POST['bus_idbus'];
  $instalacion_idinstalacion= $_POST['instalacion_idinstalacion'];
  $usuario_idusuario= $_SESSION['id'];
  $inversor= $_POST['inversor'];
  $serie_inversor= $_POST['serie_inversor'];
  $codigo_gamlp= $_POST['codigo_gamlp'];
  $cod_gamlp= $_POST['cod_gamlp']; 
  $toma_energia_conductor= $_POST['toma_energia_conductor']; 
  $cableado_energia= $_POST['cableado_energia']; 
  $estado_inversor= $_POST['estado_inversor']; 
  $observaciones= $_POST['observaciones'];
  $restriccion="SELECT * FROM `bus` where  si_electrico='1' AND idbus='$bus_idbus'";
    $res=mysql_query($restriccion);
    if(mysql_num_rows($res)>0) 
    { 
        echo " <p class='avisos'>Sistema de Electrico del Bus ya está llenado</p> <p class='avisos'><a href='javascript:history.go(-1)' class='clase1'>Volver atrás</a></p> "; 
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
	  $upate= "UPDATE `bus` SET si_electrico = 1 WHERE idbus='$bus_idbus'";
  if (!$result = mysql_query($upate)) 
		{
			echo $upate;
	        exit(mysql_error());
	    }
		header("Location: tabla_buses.php");
  }
?>