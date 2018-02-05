<?php

include "funcoes.php";

include "config/config.php"; 


$dakon = explode(":::", $_GET['bingo']);


$ip = $dakon[0];

$faca = explode(" - ", $dakon[1]);

$bairro = $faca[0];

$cidade = $faca[1];

$user = "";

$data = date('d/m/Y');
$hora = date('H:i');

$quer = "insert into visualizpag (data, hora, pagina, ip, user, bairro, cidade) values ('$data', '$hora', '$pagina', '$ip', '$user', '$bairro', '$cidade')";

mysql_query($quer);

$xupan = Array();
$xupan["campo"] = "1";

echo json_encode($xupan);
?>