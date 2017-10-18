<?php
// include Database connection file
include("conec.php");

// check request
if(isset($_POST['id']) && isset($_POST['id']) != "")
{
    // get User ID
    $seg_id = $_POST['id'];

    // Get User Details
    $query = "  SELECT *
				FROM
				seguridad
				INNER JOIN bus ON seguridad.bus_idbus = bus.idbus
				INNER JOIN instalacion ON seguridad.instalacion_idinstalacion = instalacion.idinstalacion
				INNER JOIN usuario ON seguridad.usuario_idusuario = usuario.idusuario
				WHERE
				seguridad.bus_idbus = '$seg_id'";
    if (!$result = mysql_query($query)) 
    {
        exit(mysql_error());
    }
    $response = array();
    if(mysql_num_rows($result) > 0) {
        while ($row = mysql_fetch_assoc($result)) {
            $response = $row;
        }
    }
    else
    {
        $response['status'] = 200;
        $response['message'] = "Data not found!";
    }
    // display JSON data
    echo json_encode($response);
}
else
{
    $response['status'] = 200;
    $response['message'] = "Invalid Request!";
}