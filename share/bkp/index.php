<?php



//apagar ao finalizar a produção
$mojo = "";

$logado = "";

if(isset($_GET['debug'])){


echo time();

$debug = 'sim';

$debug_appr = "table";

} else{
$debug_appr = 'none';

	$debug = 'não';
}




//apagar ao finalizar a produção

include "funcoes/ver_login.php";

include "funcoes/funcoes.php";

include "config/config.php";


$ponto = "";

if(isset($_GET["pagina"])){
	
	$pagina = filtra_str($_GET["pagina"]);
	
	
}else{

$pagina = "principal";	
	
}



	



/*

OBS.: INSERIR / POST NA BUSCA

*/


//PADROS SEO - se não for pagina de busca - se for - diferenciar (por isso vem depois) - FI + ELSE SE FOR BUSCA
if($pagina == 'busca'){
	
	
	include "includes/postbusca.php";
	
	
}else{
	
	$tob = sel_simples("paginas_hju", "*", "where qual_e = '$pagina'");
	
	$pag_dados = mysql_fetch_array($tob);
	
	switch($ponto){
		
	case '2': $ponto = "../";break;	
	}
	//dados seo
	
	$tit_u = $pag_dados['titulo'];
$alt_u = $pag_dados['alte'];
	
	if($pagina == "principal"){
		
		$drivenav = "não";
		
	}//if 2
	
	
}//1






?><!doctype html>
<html lang="pt-br">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $tit_u; ?></title>




<?php

include "includes/metatags.php";

if($logado != "sim"){

include "partials/deslogado_head.php";	
	
}



include "partials/geoloc.php";

?>



<link rel='stylesheet' id='parallax-one-bootstrap-style-css'  href='<?php echo $ponto; ?>wp-content/themes/Parallax-One/css/bootstrap.min.css?ver=3.3.1' type='text/css' media='all' />
<link rel='stylesheet' id='parallax-one-style-css'  href='<?php echo $ponto; ?>wp-content/themes/Parallax-One/style.css?ver=1.0.0' type='text/css' media='all' />


</head>

<body onload=" initialize();">

<header class="reguad cabecalho">

<div class="encaixa"><div class="tint esq_f aleft">
<a href="https://www.instashre.me/" title="<?php echo $tit_u;?>" alt="<?php echo $alt_u; ?>">


<img src="<?php echo $ponto; ?>imagens/carro compartilhado locacao instashare logo.png" class="logo" title="<?php echo $tit_u; ?>" alt="<?php echo $alt_u; ?>">


</a>

</div>



<div class="sescinc dir_f central">


<?php

if($logado != "sim"){

include "partials/menu.php";
}
?>


</div>


</div>

</header>
<?php

//section

$ui = sel_simples("sessoes", "*", "where pagina = '$pagina'");

while($joy = mysql_fetch_array($ui)){
	
	echo "<session>";
	
	include "partials/".$joy["sessao_pag"].".php";
	
	echo "</session>";
	
}//while


?>





<div id="alfa" class='dnone' onclick='fechpop()'>

</div>

<div id="alfa1" class='dnone'>

</div>


<div id='login_p' class="popup central boldim">
<br>
Digite login e senha<br>

<br><br>

<input id="concha_login" placeholder="LOGIN" class="input_frango"> &nbsp; &nbsp;

<input id="concha_pass" placeholder="SENHA" class="input_frango"><br>
<br>
<button id="loga_logo" class="btn-orange">ENTRAR</button>
<br><br>
Ou<br>

<img src="../imagens/instashare login com facebbok.png" style="height: 40px; width:auto;">

<fb:login-button
     scope="email,public_profile" onlogin="checkLoginState();" >
</fb:login-button>

<br><br>
</div>



<div id='demonst_p' class="popup central boldim">

<br><br><center>[VIDEO DEMONSTRATIVO YOUTUBE]</center>




</div>


<div id='aguard' class="popup central boldim">

<table border="0" cellspacing="0"><tr>
	

<td>


</td>
<img src="<?php echo $ponto; ?>imagens/compartilhamento aluguel carro aguarde.png" title="compartilhamento aluguel carro aguarde" alt="compartilhamento aluguel carro aguarde">
<td>

<center>
Aguarde...
</center>
</td>


</tr></table>


<br>



</div>




<footer>
<?php

include "partials/footer.php";

?>
</footer>

</body>
</html>