<?php




function cookie_vai(){
	



} // fim da funcao

function pagina(){
	


}


function listagem($tabela, $arraycol, $condicao){

$bono = sel_simples($tabela, "*", $condicao);

$blik = explode("::", $arraycol);





$bano = "";

while($fei = mysql_fetch_array($bono)){


$cont = 0;

$seto = count($blik);

//echo $seto."<br>";

$bano = $bano."<tr>";

while($cont < $seto){

$fil = $blik["$cont"];

$bano = $bano."<td>".$fei["$fil"]."</td>";


$cont +=1;
//echo $cont."<br>";
} // while 2

$bano = $bano."</tr>";

} // while
$bano = $bano."</table>";

return $bano;




} // fim da função


function marcad($ponto){


$cry = sel_simples("img_sec", "*", "order by rand() limit 1");

$buk = mysql_fetch_array($cry);


echo "background-image: url(".$ponto."imagens/sessoes/".$buk["imagem_f"]."); background-size: 100% 100%; background-repeat: no repeat; bacground-position:center center;";


} // fim da funcao

function get_usr($id){

$fun = frinha("usuarios_tt", "login_t", "um", $id);

return $fun;

}


function reglog($tipo, $logn, $us){


$ip = getRealIpAddr();

$hora = date("H:i");
$data = date("d/m/Y");

$quer = "insert into logs_ff(data, hora, ip, usuario, log, franquia) values ('$data', '$hora', '$ip', '$us', '$logn', '$tipo')";

mysql_query($quer);


}


function isprodit_id($array){

$bono = explode("-", $array);

$cat = count($bono);

$slug = $cat -1;

$indice = $bono["$slug"];

return $indice;


}


function atualiz($tabela, $set, $where){

    $quer = "update $tabela set $set where $where";

    mysql_query($quer);

}


function insere($tabela, $colunas, $valores ){




    $quer = "insert into $tabela ($colunas) values ($valores)";
echo $quer;
    mysql_query($quer);



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

//echo vai($sub).'<br>';

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
       'ç'
       
        );
    $remove_acentosu = array(
        'A','A','A','A', 
       
		'E', 'E',
          'I', 
        'O','O','O',
        'U','U',
         'C'
       
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
       'ç'
       
        );
    $remove_acentosu = array(
        'a','a','a', 'a', 
       
		'e', 'e',
          'i', 
        'o','o','o',
        'u','u',
         'c' 
       
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

function filtra_str_letra($string){
$string = preg_replace('/[^[:alpha:]_]/', '',$string);

return $string;

}

function filtra_str_alnum($string){
$string = preg_replace('/[^[:alnum:]_]/', '',$string);

return $string;

}


function desmembra($arr){

$sik = explode(":::", $arr);

return $sik;


}


function visualiz_pag($pagina, $user){


$ip = getRealIpAddr();

$data = date('d/m/Y');
$hora = date('H:i');

$quer = "insert into visualizpag (data, hora, pagina, ip, user) values ('$data', '$hora', '$pagina', '$ip', '$user')";

mysql_query($quer);


}




function visualiz_anunc($pagina, $user){


$ip = getRealIpAddr();

$data = date('d/m/Y');
$hora = date('H:i');

$quer = "insert into visualizanuncio (data, hora, pagina, ip, user) values ('$data', '$hora', '$pagina', '$ip', '$user')";

mysql_query($quer);


}



function getRealIpAddr()
{
if (!empty($_SERVER['HTTP_CLIENT_IP'])) 
{
$ip=$_SERVER['HTTP_CLIENT_IP'];
}
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) 
{
$ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
}
else
{
$ip=$_SERVER['REMOTE_ADDR'];
}

return $ip;
}







function frinha($tabela, $coluna, $idcol, $id){


$bak = sel_simples($tabela, "*", "where $idcol = '$id'");

$zomb = mysql_fetch_array($bak);

return $zomb["$coluna"];


} // fim da função





function filtra_str($string){
	
	
	
	$string = str_replace("'", "", $string);
	$string = str_replace('"', "", $string);
	$string = str_replace(",", "", $string);
	$string = str_replace(" ", "", $string);
	$string = str_replace(">", "", $string);
	$string = str_replace("'<", "", $string);
	$string = str_replace(",", "", $string);
	$string = str_replace("LIKE %", "", $string);
    $string = str_replace("like %", "", $string);
	$string = str_replace('=', "", $string);
	$string = str_replace(";", "", $string);
	$string = str_replace(" OR ", "", $string);
	$string = str_replace("1 OR", "", $string);
	$string = str_replace("%20", "", $string);
	$string = str_replace("'", "", $string);
    $string = str_replace("update ", "", $string);
	$string = str_replace("DROP TABLE", "", $string);
	$string = str_replace("drop table", "", $string);
	
	
	return $string;
	
	
	
}

function sel_simples($tabela, $colunas, $condicao){
	
	




	$juba = "select $colunas from $tabela $condicao";
	
	
//echo $juba.'<br>';

	
	$palo = mysql_query($juba);
	
	return $palo;
	
}//fim da funcao


function front_busca(){


	
}

?>