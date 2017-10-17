<?php
 session_start();
include("conec.php");
date_default_timezone_set('America/La_Paz');
 $fecha= date ('Y/m/d H:i:s');
$usuario_idusuario =$_SESSION['id'];

$bus_idbus = $_POST['acc_bus_idbus'];
$instalacion_idinstalacion = $_POST['acc_instalacion_idinstalacion'];
$molinete = $_POST['molinete'];
$estado_molinete = $_POST['estado_molinete'];
$placa_molinete = $_POST['placa_molinete'];
$val_conectordb9 = $_POST['val_conectordb9'];
$val_estadodb9 = $_POST['val_estadodb9'];
$sol_giro_ingreso = $_POST['sol_giro_ingreso'];
$sol_bastago_giro_ingreso = $_POST['sol_bastago_giro_ingreso'];
$sol_giro_inverso = $_POST['sol_giro_inverso'];
$sol_bastago_giro_inverso = $_POST['sol_bastago_giro_inverso'];
$sol_agarre_bastago = $_POST['sol_agarre_bastago'];
$sol_bastago_agarre = $_POST['sol_bastago_agarre'];
$sensor_agarre = $_POST['sensor_agarre'];
$ferritas = $_POST['ferritas'];
$rueda_dentada = $_POST['rueda_dentada'];
$contador_molinete = $_POST['contador_molinete'];
$bociona_activacion = $_POST['bociona_activacion'];
$brz1_pasador = $_POST['brz1_pasador'];
$brz1_tornillo_pasador = $_POST['brz1_tornillo_pasador'];
$brz1_brazo = $_POST['brz1_brazo'];
$brz1_tornillo_alem_largo = $_POST['brz1_tornillo_alem_largo'];
$brz2_pasador = $_POST['brz2_pasador'];
$brz2_tornillo_pasador = $_POST['brz2_tornillo_pasador'];
$brz2_brazo = $_POST['brz2_brazo'];
$brz2_tornillo_alem_largo = $_POST['brz2_tornillo_alem_largo'];
$brz3_pasador = $_POST['brz3_pasador'];
$brz3_tornillo_pasador = $_POST['brz3_tornillo_pasador'];
$brz3_brazo = $_POST['brz3_brazo'];
$brz3_tornillo_alem_largo = $_POST['brz3_tornillo_alem_largo'];
$estructura_chasis = $_POST['estructura_chasis'];
$estructura_visagras = $_POST['estructura_visagras'];
$chapas_central = $_POST['chapas_central'];
$chapas_derecha = $_POST['chapas_derecha'];
$chapas_izquierda = $_POST['chapas_izquierda'];
$observaciones = $_POST['new_observacion'];

  $restriccion = "SELECT idacceso FROM acceso  WHERE fecha IN (SELECT MAX(a.fecha) 
															FROM acceso a
															WHERE a.bus_idbus = $bus_idbus
															GROUP BY bus_idbus) AND bus_idbus = $bus_idbus
	AND  instalacion_idinstalacion='$instalacion_idinstalacion'  AND idacceso='$idacceso' molinete='$molinete' AND estado_molinete='$estado_molinete' AND placa_molinete='$placa_molinete' AND val_conectordb9='$val_conectordb9' AND val_estadodb9='$val_estadodb9' AND sol_giro_ingreso='$sol_giro_ingreso' AND sol_bastago_giro_ingreso='$sol_bastago_giro_ingreso' AND sol_giro_inverso='$sol_giro_inverso' AND sol_bastago_giro_inverso='$sol_bastago_giro_inverso' AND sol_agarre_bastago='$sol_agarre_bastago' AND sol_bastago_agarre='$sol_bastago_agarre' AND sensor_agarre='$sensor_agarre' AND ferritas='$ferritas' AND rueda_dentada='$rueda_dentada' AND contador_molinete='$contador_molinete' AND bociona_activacion='$bociona_activacion' AND brz1_pasador='$brz1_pasador' AND brz1_tornillo_pasador='$brz1_tornillo_pasador' AND brz1_brazo='$brz1_brazo' AND brz1_tornillo_alem_largo='$brz1_tornillo_alem_largo' AND brz2_pasador='$brz2_pasador' AND brz2_tornillo_pasador='$brz2_tornillo_pasador' AND brz2_brazo='$brz2_brazo' AND brz2_tornillo_alem_largo='$brz2_tornillo_alem_largo' AND brz3_pasador='$brz3_pasador' AND brz3_tornillo_pasador='$brz3_tornillo_pasador' AND brz3_brazo='$brz3_brazo' AND brz3_tornillo_alem_largo='$brz3_tornillo_alem_largo' AND estructura_chasis='$estructura_chasis' AND estructura_visagras='$estructura_visagras' AND chapas_central='$chapas_central' AND chapas_derecha='$chapas_derecha' AND chapas_izquierda='$chapas_izquierda'";

   $res=mysql_query($restriccion);
    if(mysql_num_rows($res)>0) 
    { 
    	
    }
    else
    {
		 $query="INSERT INTO `acceso`(`idacceso`, `bus_idbus`, `instalacion_idinstalacion`, `usuario_idusuario`, `molinete`, `estado_molinete`, `placa_molinete`, `val_conectordb9`, `val_estadodb9`, `sol_giro_ingreso`, `sol_bastago_giro_ingreso`, `sol_giro_inverso`, `sol_bastago_giro_inverso`, `sol_agarre_bastago`, `sol_bastago_agarre`, `sensor_agarre`, `ferritas`, `rueda_dentada`, `contador_molinete`, `bociona_activacion`, `brz1_pasador`, `brz1_tornillo_pasador`, `brz1_brazo`, `brz1_tornillo_alem_largo`, `brz2_pasador`, `brz2_tornillo_pasador`, `brz2_brazo`, `brz2_tornillo_alem_largo`, `brz3_pasador`, `brz3_tornillo_pasador`, `brz3_brazo`, `brz3_tornillo_alem_largo`, `estructura_chasis`, `estructura_visagras`, `chapas_central`, `chapas_derecha`, `chapas_izquierda`, `observaciones`, `fecha`) 
		      VALUES (NULL,'$bus_idbus','$instalacion_idinstalacion','$usuario_idusuario','$molinete','$estado_molinete','$placa_molinete','$val_conectordb9','$val_estadodb9','$sol_giro_ingreso','$sol_bastago_giro_ingreso','$sol_giro_inverso','$sol_bastago_giro_inverso','$sol_agarre_bastago','$sol_bastago_agarre','$sensor_agarre','$ferritas','$rueda_dentada','$contador_molinete','$bociona_activacion','$brz1_pasador','$brz1_tornillo_pasador','$brz1_brazo','$brz1_tornillo_alem_largo','$brz2_pasador','$brz2_tornillo_pasador','$brz2_brazo','$brz2_tornillo_alem_largo','$brz3_pasador','$brz3_tornillo_pasador','$brz3_brazo','$brz3_tornillo_alem_largo','$estructura_chasis','$estructura_visagras','$chapas_central','$chapas_derecha','$chapas_izquierda','$observaciones','$fecha')";
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


