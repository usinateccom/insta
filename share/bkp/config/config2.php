<?php
date_default_timezone_set("Brazil/East");

error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
# Informa qual o conjunto de caracteres será usado.
header('Content-Type: text/html; charset=utf-8');

$db = mysqli_connect("localhost", "root","vertrigo");
$dado = mysqli_select_db($db, "instasharep");


# Aqui está o segredo
mysqli_set_charset($db, 'utf8')

?>


