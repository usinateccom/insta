<?php


include "../config/config.php";
include "funcoes.php";


$blek = explode("::", $_GET['bingo']);

$dadou = $blek[0];
$dadod = $blek[1];
$mailo = $blek[2];
$telef = $blek[3];
$num_jus = $blek[4];
$datan = $blek[5];

$tipocad = $blek[6];

$senha = $blek[7];

//verifica se usuario existe email depois nome

if($tipocad == 'fisica'){
	
	$nomecomp = $dadou." ".$dadod;
	
	$rll = $nomecomp;
	
}else{
	
	$nomecomp = $dadou;
	$rll = "$dadou | $dadod";
}

$shiro = "";

$buno = sel_simples("us_nome_mail", "*", "where email = '$mailo'");

$fun = mysql_num_rows($buno);

if($fun > 0){
	
	$sharo = "Usuário já cadastrado. Estamos te redirecionando para o login. Aguarde...";
	
	$bik = mysql_fetch_array($buno);
	
	$shiro = $bik["email"];
	
}else{
	
	
	//insere dados iniciais
	//conf
	
	

if($tipocad == 'fisica'){

$segnom = substr($dadod, 3);
}else{

$prinom = explode (" ", $dadod);

$segnom = substr($prinom[1], 2);
	}
	//echo $segnom."*";
	
	$prinome = $dadou.$segnom;
	
$nome_cad = cresce(strtoupper($prinome));

$compl = $nome_cad."";

$dark = sel_simples("numeros", "*", "order by rand() limit 4");

while($bel = mysql_fetch_array($dark)){

$compl = $compl.$bel['numer'];



} // while

$compl = str_replace(" ", "", $compl);

$daten = date('d/m/Y');







$rise = "insert into usuarios_tt (login_t, senha_t, tipo, local, data_cad) values ('$compl', '".md5($senha)."', '2', '2', '$daten')";

mysql_query($rise);


// define id user

$fai = sel_simples("usuarios_tt", "*", "where login_t = '$compl'");

$gai = mysql_fetch_array($fai);

$id_usr = $gai["um"];
	

	

$cara = "insert into tipo_cad (id_usr, tipo) values ('$id_usr', '$tipocad')";

mysql_query($cara);

$min = "insert into us_nome_mail (nome, email, is_id) values ('$rll', '$mailo', '$id_usr')";

mysql_query($min);


// include "inclusao_tabelas_novas.php"; - OBSOLETO


//insere dados_sensiveis rg, cpf cnpj etc

$idg = $id_usr;

$fal = sel_simples("dados_sensveis", "*", "where id_us = '$idg'");

$guj = mysql_num_rows($fal);

if($guj > 0){}else{


//modificar quaery pra dados sensiveis

$mto = "insert into dados_sensveis (cfp_cnpj, id_us, data_nasc, telefonon) values ('$num_jus', '$id_usr', '$datan', '$telef')";

//echo $mto;
mysql_query($mto);

}

$mto = "insert into foto_usr (idUsr, foto) values ('$id_usr', 'imagens/cadastros/indefinido.png')";
mysql_query($mto);


//dados sensiveis

$mto = "insert into cadcomp (id_usr, status) values ('$id_usr', '1')";
mysql_query($mto);


// valores para cookie

//primiro nome . convencional . nome comp (diferencial se for razao social . foto . id - campon vai o cookie 

$shiro = $dadou."::convencional::".$nomecomp.'::<img src="https://www.instashare.me/imagens/cadastros/indefinido.png" class="bolafoto fadeImg">::'.$id_usr;

$fino = cresce(strtoupper($tipocad));



$sharo = "Cadastro efetuado com sucesso! Tipo: PESSOA $fino | Login: $compl. <br> Aguarde...";

}


$suko = Array();

$suko['campo'] = "$sharo";

$suko['campon'] = "$shiro";

echo json_encode($suko);



?>