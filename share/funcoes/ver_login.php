<?php




if (isset($_COOKIE["brasilweb_instashare"])){


//$mojo = filtra_str(base64_decode(base64_decode($_COOKIE["brasilweb_instashare"])));// aqui vai pegar o cookie e ver o id se está ok -- SE FALHAR, DAR UM ECHO PARA VERIFICAR O VALOR DO COOKIE

$mojo = $_COOKIE["brasilweb_instashare"];
/*
$bokhb = explode("::", $mojo);

$nome_l = $bokhb[0];

$foto_l = $bokhb[2];


$quer = sel_simples("usuarios_tt", "*", "where um = '$mojo'");


$baraj = mysql_fetch_array($quer);

if($baraj["local"] == '2'){

$logado = "sim";

}else{


$logado = "não";

}

*/

//echo $mojo;

$catan = explode("::", $mojo);

$logado = "sim";

$foto_l = $catan[3];

$nome_l = $catan[0];



$idzinho = $catan[4];
$usuario = $idzinho;
$capon = $idzinho;

}//if
else{

$logado = "não";

$capon = "";
}

?>