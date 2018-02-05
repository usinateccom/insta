<?php

include "../config/config.php";

include "../funcoes/funcoes.php";
//echo $_GET['bingo'].'<br>';

$flok = explode(":::", $_GET["bingo"]);

//echo $flok[0].'<br>';
//echo $flok[1].'<br>';
$quer = sel_simples("usuarios_tt", "*", "where login_t = '".filtra_str(cresce($flok[1]))."' and senha_t='".md5(filtra_str($flok[2]))."'");

$linhas = mysql_num_rows($quer);

if($linhas > 0){

	


$gai = mysql_fetch_array($quer);

$banco = $gai['local'];

//echo $banco;

if($banco == $flok[0]){

$sharo = "Login Bem-Sucedido.";

$user = $flok[1];

reglog('LOGIN', "USUÁRIO $user LOUGOU-SE NO INSTASHARE.", $user);

} //2
else{

$sharo = "Acesso não permitido.";

reglog('LOGIN', "TENTATIVA FALHA DE LOGIN NO INSTASHARE.", $flok[1]);

}//2//2




} //if 12]
else{//1

$sharo = "Login/Senha Inválido(s).";


reglog('LOGIN', "TENTATIVA FALHA DE LOGIN NO INSTASHARE.", $flok[1]);

}//1



$suko = Array();

$suko['campo'] = "$sharo";

echo json_encode($suko);
