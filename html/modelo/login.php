<?php  
include("conec.php");
	$usuario = $_POST['usuario'];
	$password =$_POST['pass'];
	//echo $usuario;
	//echo $password;
	$data = "SELECT * FROM usuario WHERE cod_user='$usuario' and pass='$password'";
	$result = mysql_query($data);
	$id = mysql_fetch_row($result); // id, user, 
    $tipo_user = $id[2];
    
	if($id[0] > 0 )
	{  
		    session_start();
			$_SESSION['id'] = $id[0];
			$_SESSION['cod'] = $id[1];
			$_SESSION['roles'] = $id[2];
			$_SESSION['nombre'] = $id[3].' '.$id[4].' '.$id[5];
			
			
			//echo "tipo".$tipo_user;
			if($tipo_user == 1)
			{
				//echo "tipo".$tipo_user;
					header("Location: ../vista/user_admin.php");
			}
			else
			{
				if($tipo_user == 2)
				{//echo $tipo_user;
					header("Location: ../index.php");
				}
				else
				{
					
					if($tipo_user == 3)
					    {
						header("Location: ../tabla_buses.php");
						}
						else
						{						
						header("Location: ../index.php");
						}
						
				}

			}
		
	}
	else
	{
		
		header("Location: ../index.php");
	}
	?>

