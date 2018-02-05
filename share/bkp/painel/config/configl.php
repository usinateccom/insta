<?php




error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
# Informa qual o conjunto de caracteres será usado.
header('Content-Type: text/html; charset=utf-8');

$db = mysql_connect("localhost","root","vertrigo");
$dado = mysql_select_db("instasharep",$db);


# Aqui está o segredo
mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');


date_default_timezone_set("Brazil/East");

$dia = date('d');
$mes = date('m');
$ano = date('y');
$mes = str_replace ("01", "Janeiro", $mes);
$mes = str_replace ("02", "Fevereiro", $mes);
$mes = str_replace ("03", "Março", $mes);
$mes = str_replace ("04", "Abril", $mes);
$mes = str_replace ("05", "Maio", $mes);
$mes = str_replace ("06", "Junho", $mes);
$mes = str_replace ("07", "Julho", $mes);
$mes = str_replace ("08", "Agosto", $mes);
$mes = str_replace ("09", "Setembro", $mes);
$mes = str_replace ("10", "Outubro", $mes);
$mes = str_replace ("11", "Novembro", $mes);
$mes = str_replace ("12", "Dezembro", $mes);

$hora = date("h:i");

$ano_com = "20$ano";

$dat_comp = date("d/m/Y");




function cresce($sub){
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
}



?>