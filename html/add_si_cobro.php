<?php
 session_start();
include("modelo/conec.php");
date_default_timezone_set('America/La_Paz');
$fecha= date ('Y-m-d H:i');
  $bus_idbus= $_POST['bus_idbus'];
  $instalacion_idinstalacion= $_POST['instalacion_idinstalacion']; 
  $usuario_idusuario= $_SESSION['id'];
  $modelo_tablet= $_POST['modelo_tablet'];
  $estado_operativo= $_POST['estado_operativo'];
  $descripcion_fallo_1= $_POST['descripcion_fallo_1'] ;
  $descripcion_fallo_2= $_POST['descripcion_fallo_2'];
  $id_validador= $_POST['id_validador'];
  $codigo_gamlp= $_POST['codigo_gamlp'];
  $cod_gamlp= $_POST['cod_gamlp'] ;
  $codigo_mfs= $_POST['codigo_mfs'];
  $cod_mfs= $_POST['cod_mfs'];
  $interfaz= $_POST['interfaz'] ;
  $estado_interfaz= $_POST['estado_interfaz'] ;
  $conector_db9= $_POST['conector_db9'];
  $estado_conector= $_POST['estado_conector'];
  $ubicacion_cable_comunicacion= $_POST['ubicacion_cable_comunicacion'];
  $estado_cable_comunicacion= $_POST['estado_cable_comunicacion'] ;
  $tipo_cable= $_POST['tipo_cable'] ;
  $tipo_hub= $_POST['tipo_hub'] ;
  $condicion_hub= $_POST['condicion_hub'] ;
  $tipo_conexion_hub= $_POST['tipo_conexion_hub'];
  $estado_conexion_hub= $_POST['estado_conexion_hub'];
  $ext_usb= $_POST['ext_usb'] ;
  $estado_usb= $_POST['estado_usb'];
  $ubicacion_cargador= $_POST['ubicacion_cargador'];
  $estado_cargador= $_POST['estado_cargador'];
  $tipo_tarjeta_inteligente= $_POST['tipo_tarjeta_inteligente'];
  $estado_tarjeta_inteligente= $_POST['estado_tarjeta_inteligente'] ;
  $numero_serie= $_POST['numero_serie'];
  $id_vsam= $_POST['id_vsam'];
  $existencia_vsam= $_POST['existencia_vsam'] ;
  $estado_vsam= $_POST['estado_vsam'];
  $tornillos_tapa_validador= $_POST['tornillos_tapa_validador'];
  $observaciones= $_POST['observaciones'];
  
   $restriccion="SELECT * FROM `bus` where  si_cobro='1' AND idbus='$bus_idbus'";
    $res=mysql_query($restriccion);
    if(mysql_num_rows($res)>0) 
    { 
        echo " <p class='avisos'>Sistema de Cobro del Bus ya está llenado</p> <p class='avisos'><a href='javascript:history.go(-1)' class='clase1'>Volver atrás</a></p> "; 
    }
    else
    {
  $query="INSERT INTO `cobro` (`idcobro`, `bus_idbus`, `instalacion_idinstalacion`, `usuario_idusuario`, `modelo_tablet`, `estado_operativo`, `descripcion_fallo_1`, `descripcion_fallo_2`, `id_validador`, `codigo_gamlp`, `cod_gamlp`, `codigo_mfs`, `cod_mfs`, `interfaz`, `estado_interfaz`, `conector_db9`, `estado_conector`, `ubicacion_cable_comunicacion`, `estado_cable_comunicacion`, `tipo_cable`, `tipo_hub`, `condicion_hub`, `tipo_conexion_hub`, `estado_conexion_hub`, `ext_usb`, `estado_usb`, `ubicacion_cargador`, `estado_cargador`, `tipo_tarjeta_inteligente`, `estado_tarjeta_inteligente`, `numero_serie`, `id_vsam`, `existencia_vsam`, `estado_vsam`, `tornillos_tapa_validador`, `observaciones`, `fecha`)
  VALUES (NULL,'$bus_idbus','$instalacion_idinstalacion','$usuario_idusuario','$modelo_tablet','$estado_operativo','$descripcion_fallo_1','$descripcion_fallo_2','$id_validador','$codigo_gamlp','$cod_gamlp','$codigo_mfs','$cod_mfs','$interfaz','$estado_interfaz','$conector_db9','$estado_conector','$ubicacion_cable_comunicacion','$estado_cable_comunicacion','$tipo_cable','$tipo_hub','$condicion_hub','$tipo_conexion_hub','$estado_conexion_hub','$ext_usb', '$estado_usb','$ubicacion_cargador','$estado_cargador','$tipo_tarjeta_inteligente','$estado_tarjeta_inteligente','$numero_serie','$id_vsam','$existencia_vsam','$estado_vsam','$tornillos_tapa_validador','$observaciones','$fecha')"; 
if (!$result = mysql_query($query))
		{
			echo $query;
	        exit(mysql_error());
	    }
	  $upate= "UPDATE `bus` SET si_cobro = 1 WHERE idbus='$bus_idbus'";
  if (!$result = mysql_query($upate)) 
		{
			echo $upate;
	        exit(mysql_error());
	    }
		header("Location: tabla_buses.php");
  }
?>


