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

//verifica se usuario existe email depois nome

if($tipocad == 'fisica'){
	
	$nomecomp = $dadou." ".$dadod;
	
}else{
	
	$nomecomp = $dadou;
	
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
	
	
$nome_cad = cresce(strtoupper($prinome));

$compl = $nome_cad."";

$dark = sel_simples("numeros", "*", "order by rand() limit 4");

while($bel = mysql_fetch_array($dark)){

$compl = $compl.$bel['numer'];


} // while

$rise = "insert into usuarios_tt (login_t, senha_t, tipo, local) values ('$compl', '".md5('facebook')."', '2', '2')";

mysql_query($rise);



	
	

$cara = "insert into tipo_cad ('id_usr', 'tipo') values ('$id_usr', '$tipocad')";


}


$suko = Array();

$suko['campo'] = "$sharo";

$suko['campon'] = "$shiro";

echo json_encode($suko);



?>