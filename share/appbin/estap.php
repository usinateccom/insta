<?php

header('Content-Type: text/plan; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');

include "../config/config.php";

include "../funcoes/funcoes.php";

$mino = Array();
$mino["campo"] = "Autenticado";

echo json_encode($mino);

?>