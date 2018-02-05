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


$where = "qual_e = '$qual_e'";

$tabela = "paginas_hj";

$set = "titulo = '$titulo', k_words = '$kword', descric = '$descric', urlen = '$urle', hu = '$hu', alte = '$alte', altura = '$nivel'";

//echo $set. " ". $where;

atualiz($tabela, $set, $where);

$buxo = Array();

$buxo["campo"] = "Metas Atualizadas com Sucesso!";

echo json_encode($buxo);

?>