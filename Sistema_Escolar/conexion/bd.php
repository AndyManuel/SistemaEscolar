<?php
$db_name = "uno";
$db_server = "localhost";
$db_user = "root";
$db_pass = "";

$db_connection = mysql_connect($db_server,$db_user,$db_pass) or die ("Error de Conexión de base");
mysql_select_db($db_name,$db_connection) or die ("La DB no existe");
mysql_query("SET NAMES 'UTF8'");

?>