<?php

include "../config/config.php";

include "funcoes.php";

$bingo = $_GET['bingo'];

$gub = sel_simples("usuarios_tt", "*", "where um = '$bingo'");

$saiko = mysql_fetch_array($gub);

$user = $saiko['login_t'];


reglog("LOGOUT", "USUÁRIO $user DESLOGOU-SE DO INSTASHARE.", $user);

$suko = Array();
$suko['prinome'] = "$bingo";
echo json_encode($suko);
?>