<?php


function cookie_vai(){
	



} // fim da funcao

function pagina(){
	


}

function desmembra($arr){

$sik = explode(":::", $arr);

return $sik;


}


function formlink($link){

$link = str_replace(" ", '-', $link);

$link = vui($link);

$link = tiracent($link);

$link = diminui($link);


return $link;

} // fim da funcao

function puxa_um($query, $coluna){



$sik = mysql_fetch_array(($query));

return $sik["$coluna"];


} // fim da funcao



function cresce($sub){

$home = strtoupper(vai($sub));

return $home;

} // fim da funcao



function diminui($sub){

$home = strtolower(vui($sub));

return $home;

} // fim da funcao


function vai($sub){
    $acentosu = array(
        'à','á','ã','â',
         'ê', 'é',
        'í',
         'ó', 'õ', 'ô',
		  'ú', 'ü',
       'ç',
       
        );
    $remove_acentosu = array(
        'À','Á','Ã','Â', 
       
		'Ê', 'É',
          'Í', 
        'Ó','Õ','Ô',
        'Ú','Ü',
         'Ç', 
       
        );
    return str_replace($acentosu, $remove_acentosu, urldecode($sub));
} // fim da função




function tiracent($sub){
    $acentosu = array(
        'à','á','ã','â',
         'ê', 'é',
        'í',
         'ó', 'õ', 'ô',
		  'ú', 'ü',
       'ç',
       
        );
    $remove_acentosu = array(
        'a','a','a', 'a', 
       
		'e', 'e',
          'i', 
        'o','o','o',
        'u','u',
         'c', 
       
        );
    return str_replace($acentosu, $remove_acentosu, urldecode($sub));
} // fim da função






function vui($sub){
    $acentosu = array(
       
         'À','Á','Ã','Â', 
       
		'Ê', 'É',
          'Í', 
        'Ó','Õ','Ô',
        'Ú','Ü',
         'Ç', 
       
       
        );
    $remove_acentosu = array(
      
 'à','á','ã','â',
         'ê', 'é',
        'í',
         'ó', 'õ', 'ô',
		  'ú', 'ü',
       'ç',

        );
    return str_replace($acentosu, $remove_acentosu, urldecode($sub));
} // fim da função





function xinka($numero){

$numeron = $numero;

if(strlen($numero) < 2){

$numeron = "0".$numero;

} // if

return $numeron;

} // fim da funcao


function guina($tabela, $valor, $coluna, $puxar){


$bun = sel_simples("$tabela", "*", "where $coluna = '$valor'");

$fak = mysql_fetch_array($bun);

$vol = $fak["$puxar"];

return $vol;


} // fim da funcao

function img_princ($idanuncio){

//echo $idanuncio;

$sal = sel_simples("fotos_anuncio", "*", "where anuncioId = '$idanuncio'");

$ban = mysql_fetch_array($sal);

$fuk = $ban["foto"];

return $fuk;


} // fim da funcao



function img_user($idusr){

$sal = sel_simples("foto_usr", "*", "where idUsr = '$idusr'");

$ban = mysql_fetch_array($sal);

$fuk = $ban["foto"];

return $fuk;


} // fim da funcao



function sel_simples($tabela, $colunas, $condicao){
	
	




	$juba = "select $colunas from $tabela $condicao";
	
	
//echo $juba.'<br>';

	
	$palo = mysql_query($juba);
	
	return $palo;
	
}//fim da funcao


function front_busca(){


	
}

?>