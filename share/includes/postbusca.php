<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	

$buscapulo = $_POST['busca_pulo'];

$bikn = explode("|||", $buscapulo);

// mprimeiro ve qual carro ta disponivel

$compler = "";

$cont = 0;

$bokan = sel_simples("disponiv", "*", "where disp = '2'");

$carlos = mysql_num_rows($bokan);

$gota = $carlos - 1;

if($carlos > 0){

while($xonang = mysql_fetch_array($bokan)){

if($cont == 0){

	$compler = $compler."where um <> '".$xonang["id_anunc"]."' ";
	
}else{
	
	$compler = $compler." AND um <> '".$xonang["id_anunc"]."' ";
	
	
}
	

// quer

if(($cont == $gota) AND ($bikn[0] != '-')){

$compler = $compler."AND ";	
	
}


$cont +=1;	
	
}

$quergg = $compler;

}else{
	
$quergg = "";	
	
}

if($bikn[0] != "-"){

$mulani = " endere_comp LIKE '%".$bikn[0]."%'";	
	
}else{
	
	$mulani = "";
	
}

//echo $bikn[0];
// aqui seleciona os anuncios disponiveis conforme caratecrist

$buda = sel_simples("anuncios", "*", $quergg.$mulani." order by rand() limit 6");


//echo '**--**';
reglog("BUSCA", "BUSCA REALIZADA PELO USUÁRIO $usuario", $usuario);

} else{

echo "<script> window.location.href='https://www.instashare.me/'; </script>";

}// post


?>