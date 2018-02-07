<?php
date_default_timezone_set("Brazil/East");

error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
# Informa qual o conjunto de caracteres será usado.
header('Content-Type: text/html; charset=utf-8');

$db = mysql_connect("localhost","root","vertrigo");
$dado = mysql_select_db("instashh",$db);


# Aqui está o segredo
mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');

?>


