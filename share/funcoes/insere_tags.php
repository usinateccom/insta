<?php

include "../config/config.php";

include "funcoes.php";

$bingo = $_GET["bingo"];

$fik = explode(":::", $bingo);

$titulo = $fik[0];
$kword = $fik[1];
$descric = $fik[2];
$urle = $fik[3];

if($urle == '-'){

$urle = "";

}

$hu = $fik[4];

$titu = $fik[5];
$alte = $fik[6];
$nivel = $fik[7];

$qual_e = $fik[8];

$imgu = 'carro compartilhado locacao instashare logo.png';

$pi = 'png';


$colunas = "titulo, k_words, descric, urlen, hu, alte, qual_e, altura, imagem, tipoimgg";

$tabela = "paginas_hj";

$valores = "'$titulo', '$kword', '$descric', '$urle', '$hu', '$alte', '$qual_e', '$nivel', '$imgu', '$pi'";

//echo $set. " ". $where;

insere($tabela, $colunas, $valores);

$buxo = Array();

$buxo["campo"] = "Metas INSERIDAS com Sucesso!";

echo json_encode($buxo);

?>