<?php

include "../config/config.php";

include "funcoes.php";
//echo $_GET['bingo'].'<br>';

$flok = explode(":::", $_GET["bingo"]);

//echo $flok[0].'<br>';
//echo $flok[1].'<br>';


if ($flok[2] == 'undefined') {
	# code...
// seleciona pelo nome

$vok = sel_simples("us_nome_mail", "*", "where nome = '".$flok[1]."'");

$dan = mysql_fetch_array($vok);
$lin = mysql_num_rows($vok);

if($lin > 0){

$nome = $dan["nome"];

$pri = explode(" ", $nome);
$prinome = $pri[0];
$idg = $dan["is_id"];
$segnom = substr($pri[1], 2);
//login

$blok = sel_simples("usuarios_tt", "*", "where um = '$idg'");

$shum = mysql_fetch_array($blok);

$user = $shum['login_t'];



reglog("LOGIN", "USUÁRIO $user LOGOU-SE NO INSTASHARE.", $user);



$vuk = sel_simples("tipo_cad", "*", "where id_usr = '#idg'");

$hj = mysql_num_rows($vuk);

if($hj > 0){}else{


$bok = "insert into tipo_cad (id_usr, tipo) values ('$idg', 'fisica')";

mysql_query($bok);
	
}


}else{

//cadastra




$pri = explode(" ", $flok[1]);
$prinome = $pri[0];
$segnom = substr($pri[1], 2);
$nome_cad = cresce(strtoupper($prinome.$segnom));

$compl = $nome_cad."";

$dark = sel_simples("numeros", "*", "order by rand() limit 4");

while($bel = mysql_fetch_array($dark)){

$compl = $compl.$bel['numer'];


} // while

$rise = "insert into usuarios_tt (login_t, senha_t, tipo, local) values ('$compl', '".md5('facebook')."', '2', '2')";

mysql_query($rise);

$fik = sel_simples("usuarios_tt", "*", "order by um desc limit 1");

$fg = mysql_fetch_array($fik);

$user = $fg["login_t"];

$nome = $flok[1];
$idg = $fg['um'];

$cab = "insert into us_nome_mail (nome, email, is_id) values ('".$flok[1]."', '".$flok[2]."', '$idg')";

mysql_query($cab);

$suv = "insert into validacao_cad (id_usr, val) values ('$idg', '2')";

mysql_query($suv);

$vak = "insert into cadcomp (id_usr, status) values ('$idg', '1')";

mysql_query($vak);

$guj = "insert into foto_user(idUsr, foto) values ('$idg', face')";

mysql_query($guj);

reglog("CADASTRO", "USUÁRIO $user CADASTROU-SE NO INSTASHARE.", $user);



$bok = "insert into tipo_cad (id_usr, tipo) values ('$idg', 'fisica')";

mysql_query($bok);

}


}else{


//seleciona pelo email





$vok = sel_simples("us_nome_mail", "*", "where email = '".$flok[2]."'");

$dan = mysql_fetch_array($vok);
$lin = mysql_num_rows($vok);

if($lin > 0){

$nome = $dan["nome"];

$pri = explode(" ", $nome);
$prinome = $pri[0];
$idg = $dan["is_id"];

//login

$blok = sel_simples("usuarios_tt", "*", "where um = '$idg'");

$shum = mysql_fetch_array($blok);

$user = $shum['login_t'];


reglog("LOGIN", "TENTATIVA FALHA DE LOGIN NO INSTASHARE.", "Indefinido");


}else{

//cadastra


$cab = "insert into us_nome_mail (nome, email) values ('".$flok[1]."', '".$flok[2]."')";

mysql_query($cab);

$pri = explode(" ", $flok[1]);
$prinome = $pri[0];

$nome_cad = cresce(strtoupper($prinome));

$compl = $nome_cad."";

$dark = sel_simples("numeros", "*", "order by rand() limit 4");

while($bel = mysql_fetch_array($dark)){

$compl = $compl.$bel['numer'];


} // while

$rise = "insert into usuarios_tt (login_t, senha_t, tipo, local) values ('$compl', '".md5('facebook')."', '2', '2')";

mysql_query($rise);

$fik = sel_simples("usuarios_tt", "*", "order by um desc limit 1");

$fg = mysql_fetch_array($fik);

$user = $fg["login_t"];

$nome = $flok[1];
$idg = $fg['um'];

reglog("CADASTRO", "USUÁRIO $user CADASTROU-SE NO INSTASHARE.", $user);


}




}


//echo $flok[2];



$suko = Array();
$suko['prinome'] = "$prinome";
$suko['nome'] = "$nome";
$suko['foto'] = "<img src='https://graph.facebook.com/".$flok[3]."/picture/?type=large' class='bolafoto fadeImg'>";
$suko['id'] = "$idg";
$suko["tipo"] = "Face";
$suko['campo'] = "$sharo";

echo json_encode($suko);
