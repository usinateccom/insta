<?php
include "../config/config.php";

include "../funcoes/funcoes.php";
//echo $_GET['bingo'].'<br>';

$flok = explode(":::", $_GET["bingo"]);


$id_anuncio = $flok[0];

$usuario = $flok[1];

$data_init = $flok[2];

$hora_init = $flok[4];
$data_end = $flok[3];
//echo $data_init;
//echo $data_end;

$hora_end = $flok[5];
//retorna


$di = explode("/", $data_init);
$de = explode("/", $data_end);

$sti = mktime(0, 0, 0, $di[1], $di[0], $di[2]);

$ste = mktime(0, 0, 0, $de[1], $de[0], $de[2]);

//$dif_hora = $hora_end - $hora_init;

//echo $dif_hora;
//echo $sti.'<br>'.$ste;

$bot = $ste - $sti;

//echo $bot;

$dias = $bot / 86400;

$horu = explode(":", $hora_init);
$hord = explode(":", $hora_end);


$fhb = sel_simples("anuncios", "*", "where um = '$id_anuncio'");
$fik = mysql_fetch_array($fhb);

$bun = $fik["preco"] / 24;

$gand = $dias * $fik["preco"];

//echo $fik["preco"];
//echo $dias;
//echo $id_anuncio;

$sharo = "R$ ".$gand.",00";



//$bigo = $hora_end - $hora_init;
//echo $bigo;

$suko = Array();

$suko['campo'] = "$sharo";

echo json_encode($suko);


?>