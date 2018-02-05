<?php

include "../config/configl.php";

include "../../funcoes/funcoes.php";


$flok = desmembra($_GET["$bingo"]);


$quer = sel_simples("usuarios_tt", "*", "where login_t = '".cresce($flok[0])."' and senha_t='".md5($flok[1])."'");

$linhas = mysql_num_rows($quer);

if($linhas > 0){

$sharo = "Login/Senha Inválido(s).";

} //if 12]
else{


$banco = puxa_um($quer, 'local');


//if($banco == '4'){

$sharo = "Login Bem-Sucedido.";

/*} //2
else{

$sharo = "Acesso não permitido.";

}*/

}



$suko = Array();

$suko['campo'] = "$sharo";

echo json_encode($suko);



?>