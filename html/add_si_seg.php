 <?php
 session_start();
include("modelo/conec.php");
date_default_timezone_set('America/La_Paz');
$fecha= date ('Y/m/d H:i');

$bus_idbus = $_POST['bus_idbus'];
$instalacion_idinstalacion = $_POST['instalacion_idinstalacion'];
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
$lambda3 = $_POST['lambda3'];
$lambda4 = $_POST['lambda4'];
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
$obs = $_POST['obs'];

$restriccion="SELECT * FROM `bus` where  si_segurida='1' AND idbus='$bus_idbus'";
    $res=mysql_query($restriccion);
    
    if(mysql_num_rows($res)>0) 
    { 
        echo " <p class='avisos'>Sistema de seguriad del Bus ya está llenado</p> <p class='avisos'><a href='javascript:history.go(-1)' class='clase1'>Volver atrás</a></p> "; 
    }
    else
    {

$query="INSERT INTO `seguridad`(`idseguridad`, `bus_idbus`, `instalacion_idinstalacion`, `usuario_idusuario`, `dvr_gabinete`, `dvr`, `dvr_existencia`, `funcion_grabacion`, `Almacenamiento`, `Capacidad`, `num_serie_hdd`, `tornillos_rac_hdd`, `adaptador_rca`, `lambda1`, `lambda2`, `lambda3`, `lambda4`, `out1`, `out2`, `out3`, `out4`, `kl_mesclaor_video`, `kl_out1`, `kl_out2`, `kl_out3`, `kl_out4`, `cam_com_front`, `cam_com_cond`, `cam_val`, `cam_puerta_sal`, `cam_retro`, `obs`, `fecha`) VALUES ('','$bus_idbus','$instalacion_idinstalacion', '$usuario_idusuario', '$dvr_gabinete', '$dvr', '$dvr_existencia', '$funcion_grabacion', '$Almacenamiento', '$Capacidad', '$num_serie_hdd', '$tornillos_rac_hdd', '$adaptador_rca', '$lambda1', '$lambda2', '$lambda3', '$lambda4', '$out1', '$out2', '$out3', '$out4', '$kl_mesclaor_video', '$kl_out1', '$kl_out2', '$kl_out3', '$kl_out4', '$cam_com_front', '$cam_com_cond', '$cam_val', '$cam_puerta_sal', '$cam_retro', '$obs', '$fecha')";

   
    if (!$result = mysql_query($query)) 
	{
			echo $query;
	       exit(mysql_error());
	   }
	  $upate= "UPDATE `bus` SET si_segurida = 1 WHERE idbus='$bus_idbus'";
 		if (!$result = mysql_query($upate)) 
		{
			echo $upate;
	        exit(mysql_error());
	    }
		header("Location: tabla_buses.php");
	}
?>


