<?php
date_default_timezone_set("Brazil/East");

error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
# Informa qual o conjunto de caracteres será usado.
header('Content-Type: text/html; charset=utf-8');

$db = mysqli_connect("mysql.instashare.me", "instashare","tst142536");
$dado = mysqli_select_db($db, "instashare");


# Aqui está o segredo
mysqli_set_charset($db, 'utf8')

?>


