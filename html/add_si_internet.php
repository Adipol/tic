 <?php
 session_start();
include("modelo/conec.php");
date_default_timezone_set('America/La_Paz');
$fecha= date ('Y/m/d H:i');

$bus_idbus = $_POST['bus_idbus'];
$instalacion_idinstalacion = $_POST['instalacion_idinstalacion'];
$usuario_idusuario =$_SESSION['id'];
$estado = $_POST['estado'];
$rout_num_serie = $_POST['rout_num_serie'];
$rout_num_imei = $_POST['rout_num_imei'];
$rout_estado = $_POST['rout_estado'];
$rout_ubicacion = $_POST['rout_ubicacion'];
$rout_cargador = $_POST['rout_cargador'];
$sim = $_POST['sim'];
$sim_ubicacion = $_POST['sim_ubicacion'];
$sim_numero = $_POST['sim_numero'];
$sim_serie = $_POST['sim_serie'];
$abrazaderas = $_POST['abrazaderas'];
$cloud = $_POST['cloud'];
$cloud_estado = $_POST['cloud_estado'];
$cloud_numero = $_POST['cloud_numero'];
$cloud_serie = $_POST['cloud_serie'];
$cloud_cargador = $_POST['cloud_cargador'];
$obs = $_POST['observaciones'];

    $restriccion="SELECT * FROM `bus` where  si_internet='1' AND idbus='$bus_idbus'";
    $res=mysql_query($restriccion);
    
    if(mysql_num_rows($res)>0) 
    { 
        echo " <p class='avisos'>Sistema de internet del Bus ya está llenado</p> <p class='avisos'><a href='javascript:history.go(-1)' class='clase1'>Volver atrás</a></p> "; 
    }
    else
    {

		$query="INSERT INTO `internet`(`idInternet`, `bus_idbus`, `instalacion_idinstalacion`, `usuario_idusuario`, `estado`, `rout_num_serie`, `rout_num_imei`, `rout_estado`, `rout_ubicacion`, `rout_cargador`, `sim`, `sim_ubicacion`, `sim_numero`, `sim_serie`, `abrazaderas`, `cloud`, `cloud_estado`, `cloud_numero`, `cloud_serie`, `cloud_cargador`, `obs`, `fecha`) VALUES ('','$bus_idbus','$instalacion_idinstalacion','$usuario_idusuario','$estado','$rout_num_serie','$rout_num_imei','$rout_estado','$rout_ubicacion','$rout_cargador','$sim','$sim_ubicacion','$sim_numero','$sim_serie','$abrazaderas','$cloud','$cloud_estado','$cloud_numero','$cloud_serie','$cloud_cargador','$obs','$fecha')";
   
	  		  if (!$result = mysql_query($query)) 
				{
				echo $query;
		       exit(mysql_error());
		  		 }
		 		 $upate= "UPDATE `bus` SET si_internet = 1 WHERE idbus='$bus_idbus'";
	 				if (!$result = mysql_query($upate)) 
					{
					echo $upate;
			        exit(mysql_error());
				}
			header("Location: tabla_buses.php");
	}
?>
