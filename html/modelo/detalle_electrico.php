<?php
// include Database connection file
include("conec.php");
// check request
if(isset($_POST['id']) && isset($_POST['id']) != "")
{
    // get User ID
    $electrico = $_POST['id'];

    // Get User Details
    $query = "SELECT * 
              FROM electrico e,usuario u,bus b
              WHERE e.bus_idbus = '$electrico' AND e.usuario_idusuario=u.idusuario AND e.bus_idbus=b.idbus";
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