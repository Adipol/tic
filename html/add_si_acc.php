 <?php
 session_start();
include("modelo/conec.php");
date_default_timezone_set('America/La_Paz');
$fecha= date ('Y/m/d H:i');

$bus_idbus = $_POST['bus_idbus'];
$instalacion_idinstalacion = $_POST['instalacion_idinstalacion'];
$usuario_idusuario =$_SESSION['id'];
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
$observaciones = $_POST['observaciones'];

$restriccion="SELECT * FROM `bus` where  si_acceso='1' AND idbus='$bus_idbus'";
    $res=mysql_query($restriccion);
    
    if(mysql_num_rows($res)>0) 
    { 
        echo " <p class='avisos'>Sistema de Acceso del Bus ya está llenado</p> <p class='avisos'><a href='javascript:history.go(-1)' class='clase1'>Volver atrás</a></p> "; 
    }
    else
    {
    $query="INSERT INTO `acceso`(`idacceso`, `bus_idbus`, `instalacion_idinstalacion`, `usuario_idusuario`, `molinete`, `estado_molinete`, `placa_molinete`, `val_conectordb9`, `val_estadodb9`, `sol_giro_ingreso`, `sol_bastago_giro_ingreso`, `sol_giro_inverso`, `sol_bastago_giro_inverso`, `sol_agarre_bastago`, `sol_bastago_agarre`, `sensor_agarre`, `ferritas`, `rueda_dentada`, `contador_molinete`, `bociona_activacion`, `brz1_pasador`, `brz1_tornillo_pasador`, `brz1_brazo`, `brz1_tornillo_alem_largo`, `brz2_pasador`, `brz2_tornillo_pasador`, `brz2_brazo`, `brz2_tornillo_alem_largo`, `brz3_pasador`, `brz3_tornillo_pasador`, `brz3_brazo`, `brz3_tornillo_alem_largo`, `estructura_chasis`, `estructura_visagras`, `chapas_central`, `chapas_derecha`, `chapas_izquierda`, `observaciones`, `fecha`) 
      VALUES ('','$bus_idbus','$instalacion_idinstalacion','$usuario_idusuario','$molinete','$estado_molinete','$placa_molinete','$val_conectordb9','$val_estadodb9','$sol_giro_ingreso','$sol_bastago_giro_ingreso','$sol_giro_inverso','$sol_bastago_giro_inverso','$sol_agarre_bastago','$sol_bastago_agarre','$sensor_agarre','$ferritas','$rueda_dentada','$contador_molinete','$bociona_activacion','$brz1_pasador','$brz1_tornillo_pasador','$brz1_brazo','$brz1_tornillo_alem_largo','$brz2_pasador','$brz2_tornillo_pasador','$brz2_brazo','$brz2_tornillo_alem_largo','$brz3_pasador','$brz3_tornillo_pasador','$brz3_brazo','$brz3_tornillo_alem_largo','$estructura_chasis','$estructura_visagras','$chapas_central','$chapas_derecha','$chapas_izquierda','$observaciones','$fecha')";
     if (!$result = mysql_query($query)) 
		{
			echo $query;
	        exit(mysql_error());
	    }
	  $upate= "UPDATE `bus` SET si_acceso = 1 WHERE idbus='$bus_idbus'";
  if (!$result = mysql_query($upate)) 
		{
			echo $upate;
	        exit(mysql_error());
	    }
		header("Location: tabla_buses.php");

	}
?>


