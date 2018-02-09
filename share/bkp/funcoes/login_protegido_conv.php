<?php

include "../config/config.php";

include "funcoes.php";
//echo $_GET['bingo'].'<br>';

$flok = explode(":::", $_GET["bingo"]);

//echo $flok[0].'<br>';
//echo $flok[1].'<br>';
$quer = sel_simples("usuarios_tt", "*", "where login_t = '".filtra_str(cresce($flok[1]))."' and senha_t='".md5(filtra_str($flok[2]))."' and local = '2'");

$linhas = mysql_num_rows($quer);

if($linhas > 0){

	
	// se acha na tabela

// puxa o id do usuario e joga no array pra pegar nome


// manda log
$sharo = "Login Bem-Sucedido. Aguarde...";

// puxa o id do usuario e joga no array

$sh = mysql_fetch_array($quer);

$id = $sh['um'];

$idg = $id;

$user = $sh["login_t"];

reglog("LOGIN", "USUÁRIO $user LOGOU-SE NO INSTASHARE.", $user);



$vuk = sel_simples("tipo_cad", "*", "where id_usr = '$idg'");

$hj = mysql_num_rows($vuk);

if($hj > 0){}else{


$bok = "insert into tipo_cad (id_usr, tipo) values ('$idg', 'fisica')";

mysql_query($bok);



	
}


$fal = sel_simples("dados_sensveis", "*", "where id_us = '$idg'");

$guj = mysql_num_rows($fal);

if($guj > 0){}else{

$frt = "insert into dados_sensveis (id_us) valuse ('$idg')";
mysql_query($frt);

}


$nome = frinha("us_nome_mail", "nome", "is_id", $id);
$pri = explode(" ", $nome);
$prinome = $pri[0];

$foto = frinha("foto_usr", "foto", "idUsr", $id);

$idg = $id;

} //if 12]
else{//1


// se não acha, verifica o e-mail
$quer = sel_simples("us_nome_mail", "*", "where email = '".filtra_str($flok[1])."'");

$linhas = mysql_num_rows($quer);

if($linhas > 0){
//aqui, pega o e-mail e verifica a senha atraves do cambalacho com id-user

$panka = mysql_fetch_array($quer);

$idu = $panka["is_id"];

$queru = sel_simples("usuarios_tt", "*", "where um = '$idu' and senha_t='".md5(filtra_str($flok[2]))."' and local = '2'");



$aru = mysql_num_rows($queru);

if($aru > 0){

// puxa o id do usuario e joga no array pra pegar nome

$nome = $panka["nome"];

$pri = explode(" ", $nome);
$prinome = $pri[0];

$foto = frinha("foto_usr", "foto", "idUsr", $idu);
$idg = $idu;
// manda log

$sharo = "Login Bem-Sucedido. Aguarde...";
 $user = frinha("usuarios_tt", 'login_t', 'um', $idu);

reglog("LOGIN", "USUÁRIO $user LOGOU-SE NO INSTASHARE.", $user);



$vuk = sel_simples("tipo_cad", "*", "where id_usr = '$idg'");

$hj = mysql_num_rows($vuk);

if($hj > 0){}else{


$bok = "insert into tipo_cad (id_usr, tipo) values ('$idg', 'fisica')";

mysql_query($bok);



	
}


$fal = sel_simples("dados_sensveis", "*", "where id_us = '$idg'");

$guj = mysql_num_rows($fal);

if($guj > 0){}else{

$frt = "insert into dados_sensveis (id_us) valuse ('$idg')";
mysql_query($frt);

}

}else{

$sharo = "Login e/ou Senha Inválido(s).";



reglog("LOGIN", "TENTATIVA FALHA DE LOGIN NO INSTASHARE.", "Indefinido");

}

}else{

// so aqui tem o valor devido de sharo.


	$sharo = "Login e/ou Senha Inválido(s).";
	
reglog("LOGIN", "TENTATIVA FALHA DE LOGIN NO INSTASHARE.", "Indefinido");
// manda log


}//naõa acrescentar nada

}//1



$suko = Array();
$suko['prinome'] = "$prinome";
$suko['nome'] = "$nome";
$suko['foto'] = "<img src='http://instashare.me/$foto' class='bolafoto fadeImg'>";
$suko['id'] = "$idg";
$suko["tipo"] = "Convencional";
$suko['campo'] = "$sharo";

echo json_encode($suko);
