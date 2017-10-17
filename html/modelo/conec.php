<?php

// Connection variables 
$host = "localhost"; // MySQL host name eg. localhost
$user = "root"; // MySQL user. eg. root ( if your on localserver)
$password = ""; // MySQL user password  (if password is not set for your root user then keep it empty )
$database = "relevamiento"; // MySQL Database name

// Connect to MySQL Database 
$db = mysql_connect($host, $user, $password) or die("No se puede conectar con la base de datos");
mysql_set_charset('utf8');
// Select MySQL Database 
mysql_select_db($database, $db) or die("algo salio mal en la conexion");
mysql_query("SET NAMES 'utf8'"); 
?>