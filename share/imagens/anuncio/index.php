<!DOCTYPE html>
<html>
    <head>
<html lang="pt-br">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />







<title><?php 





//apagar ao finalizar a produção

$usuario = "indefinido";

$mojo = "";

$logado = "";

$pepo = "";





//apagar ao finalizar a produção

include "funcoes/ver_login.php";

include "funcoes/funcoes.php";

include "config/config.php";


$ponto = "";





if(isset($_GET["pagina"])){
    
    $pagina = filtra_str($_GET["pagina"]);
//echo $pagina;
    $tob = sel_simples("paginas_hj", "*", "where urlen = '$pagina'");
    
    $pag_dados = mysql_fetch_array($tob);



    $ponton = $pag_dados["altura"];
    
    //echo $ponton;
    
    switch($ponton){
        
    case '2': $ponto = "../";break; 

    case '3': $ponto = "../../";break;  
    }
    //dados seo
    
    

if(isset($_GET['anuncio'])){


$pagina = "anuncio";

$ildo = $_GET["ildo"];



$ponto = "../../";

}


}else{

$pagina = "principal";  

    $tob = sel_simples("paginas_hj", "*", "where qual_e = '$pagina'");
        $pag_dados = mysql_fetch_array($tob);
        



}






/*

OBS.: INSERIR / POST NA BUSCA

*/


//PADROS SEO - se não for pagina de busca - se for - diferenciar (por isso vem depois) - FI + ELSE SE FOR BUSCA
if($pagina == 'busca/'){
    
    
    include "includes/postbusca.php";
    
    
}else{
    

    
    $ponton = $pag_dados["altura"];
    
    //echo $ponton;
    
    switch($ponton){
        
    case '2': $ponto = "../";break; 

    case '3': $ponto = "../../";break;  
    }
    //dados seo
    //dados seo
    
    $tit_u = $pag_dados['titulo'];
$alt_u = $pag_dados['alte'];
    
    if($pagina == "principal"){
        
        $drivenav = "não";
        
    }//if 2
    else{
        
            $tob = sel_simples("paginas_hj", "*", "where urlen = '$pagina'");
    
    $pag_dados = mysql_fetch_array($tob);
        
    }
    
    






}//1


if(isset($_GET["ildo"])){

$ildo = $_GET["ildo"];
$pagina = 'anuncio';

$pepo = 'anuncio';

$ponto = "../../";





$id = isprodit_id($ildo);


$buda = sel_simples("anuncios", "*", "where um = '$id'");

$bunf = mysql_fetch_array($buda);

$id = $bunf["um"];

$id_anunc = $id;

$modelo = $bunf["modelo"];



$bairro = guina("bairros_ff", $bunf["bairro"], "idBairro", "bairro" );

$cidade = guina("cidades_ff", $bunf["cidade"], "idCidade", "cidade" );

$idzinho = xinka($id);

$modelon  = str_replace(" ", "-", $modelo);

$modelon  = str_replace("%20", "-", $modelo);

$link = formlink("$modelon-$bairro-$idzinho/");

$preco = $bunf["preco"];

$idusr = $bunf["propiet"];

$nome = guina("dados_usr", $idusr, "id_tab_p", "nome");


}







if($pagina != 'anuncio'){echo $tit_u;}

else{




$id = isprodit_id($ildo);


$buda = sel_simples("anuncios", "*", "where um = '$id'");

$bunf = mysql_fetch_array($buda);

$id = $bunf["um"];

$modelo = $bunf["modelo"];



$bairro = guina("bairros_ff", $bunf["bairro"], "idBairro", "bairro" );

$cidade = guina("cidades_ff", $bunf["cidade"], "idCidade", "cidade" );

$idzinho = xinka($id);

$modelon  = str_replace(" ", "-", $modelo);

$modelon  = str_replace("%20", "-", $modelo);

$link = formlink("$modelon-$bairro-$idzinho/");

$preco = $bunf["preco"];

$idusr = $bunf["propiet"];

$nome = guina("dados_usr", $idusr, "id_tab_p", "nome");




	echo $modelo.' - '.$bairro;} ?></title>




<?php

include "includes/metatags.php";
?>

<?php
if($logado != "sim"){

include "partials/deslogado_head.php";  
    
}



include "partials/geoloc.php";



//troca logado conforme pagina




if($pagina == 'principal'){

echo '
      
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="config/js/background.cycle.js"></script>


        <script type="text/javascript">
            $(document).ready(function() {









                $("#xamanu").backgroundCycle({
                    imageUrls: [
                        '."'imagens/bg1.jpg',
                        'imagens/bg2.jpg',
                        'imagens/bg3.jpg',
                        'imagens/bg4.jpg'".'
                    ],
                    fadeSpeed: 2000,
                    duration: 3000,
                    backgroundSize: SCALING_MODE_COVER
                });






            });
        </script>';
}

        ?>




<link rel='stylesheet' id='parallax-one-bootstrap-style-css'  href='<?php echo $ponto; ?>wp-content/themes/Parallax-One/css/bootstrap.min.css?ver=3.3.1' type='text/css' media='all' />
<link rel='stylesheet' id='parallax-one-style-css'  href='<?php echo $ponto; ?>wp-content/themes/Parallax-One/style.css?ver=1.0.0' type='text/css' media='all' />


<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

</head>

<body onload=" initialize();" class='fadeIn' style="font-family: 'Montserrat', sans-serif;" class="fadeIn">


<input tyoe="text" id="reservaid" class="dnone" value="<?php echo $capon; ?>">

<div id="frame_app" style="">


<div style="margin-top: 30%;">
<img src="<?php echo $ponto; ?>imagens/carro compartilhado locacao instashare logo3.png" class="logo" title="<?php echo $tit_u; ?>" alt="<?php echo $alt_u; ?>">
<br><br>
O que está esperando? Baixe agora o app Instashare!<br><br>
<img src="<?php echo $ponto; ?>imagens/image00.png" title="<?php echo $tit_u; ?>" alt="<?php echo $alt_u; ?>" style="min-width:30%; max-width: 70%; height:auto;">
<br>
<img src="<?php echo $ponto; ?>imagens/Apple_Store.png" title="<?php echo $tit_u; ?>" alt="<?php echo $alt_u; ?>" style="min-width:30%; max-width: 70%; height:auto;">
</div>



</div>
















<?php if ($logado != 'sim'){




    echo "
<button id='mug_log_face' onclick='testAPI()' style='display: none;'>bbb</button>
";

}
include "funcoes/face_def.php";






?>




<header class="regua cabecalho" style="font-family: 'Montserrat', sans-serif; font-size: 12px;">

<div class="encaixa"><div class="tint esq_f aleft">
<a href="https://www.instashare.me/" title="<?php echo $tit_u;?>" alt="<?php echo $alt_u; ?>">


<img src="<?php echo $ponto; ?>imagens/carro compartilhado locacao instashare logo.png" class="logo" title="<?php echo $tit_u; ?>" alt="<?php echo $alt_u; ?>">


</a>

</div>



<div class="sescinc dir_f central">


<?php

if($logado != "sim"){

include "partials/menu.php";
}else{


include "partials/menu_logado.php";

}
?>


</div>


</div>

</header>

<input type="text" id="sat_f" value="not" class="dnone">


<?php if($pagina == "principal"){

    echo'

  <div id="xamanu" style="width: 100%; height: 800px" class="fadeIn; background-size: 100% 100%; background-repeat: no-repeat; background-position: center center;">


<br><br><br><br><br><br><br>

<center><h1 style="color:#fff; font-family: '."'Montserrat'".', sans-serif;">'.$pag_dados["hu"].'</h1><br><br>
<br><div class="boter" onclick="demonstrativo()" style="color: #fff; ">
ASSISTA O DEMONSTRATIVO
</div><br><br><br><br><br><br><br><br><br><br><br><br>

</center>




  </div>
     ';}







//section

$ui = sel_simples("sessoes", "*", "where pagina = '$pagina' order by um");

while($joy = mysql_fetch_array($ui)){
    
    echo "<section>";
    
    include "partials/".$joy["sessao_pag"].".php";
    
    echo "</section>";
    
}//while


?>
 





<div id="alfa" class='dnone' onclick='fechpop()'>

</div>

<div id="alfa1" class='dnone'>

</div>


<?php if($logado != 'sim'){





    echo '

<div id="login_p" class="popup central boldim dnone" style=" margin-top:-250px;background-image:url(imagens/locacao%20carros%20compartilhamento%20fundo.jpg); background-size: 100% 100%">
<br>
Digite login e senha<br>

<br><br>

<input id="concha_login" placeholder="LOGIN / E-MAIL" class="input_frango"> &nbsp; &nbsp;

<input id="concha_pass" placeholder="SENHA" class="input_frango" type="password"><br>
<br>
<button id="loga_logo" class="pico" style="border-radius: 20px">ENTRAR</button>
<br><div id="shubam" class="central vermelho"></div>
<div class="regua">
<left><a href="../senha/" title="Recuperar Senha">Esqueci minha senha</a><br></left>
</div><br>
Ou<br>

<br>


<fb:login-button size="xlarge" scope="public_profile,email" onlogin="checkLoginState();">
</fb:login-button>
<br><br>
<b>

Ao se cadastrar/logar você declara <u>concordar</u> com nossos <a href="'.$ponto.'termos-compromisso/" target="_blank" title="'.$tit_u.'">Termos de Compromisso</a>.</b>


<div class="reguad central vermelho" id="barkumin">

</div>


</div>






<script>

$("#loga_logo").click(function(){

disab("concha_login", "concha_pass");

$("#shubam").html("Aguarde...");
$("#alfa1").removeClass("dnone");
$("#alfa1").addClass("fadeIn");




var rit = $("#concha_login").val() + ":::" + $("#concha_pass").val(); 

//alert(rit);
$.getJSON("'.$ponto.'funcoes/login_protegido_conv.php",
    {bingo: "--:::"+ rit},

    function(json){
        
        var belga = json.campo;

if(belga != "Login e/ou Senha Inválido(s)."){

        var bundana = json.prinome + "::" + json.tipo + "::" + json.nome  + "::" + json.foto + "::" + json.id;

//alert(bundana);

        setCookieno("brasilweb_instashare",bundana);

$("#shubam").html(belga);

window.setTimeout("reseta();", 1000);


//cria cookie

        }else{


habil("concha_loginn", "concha_passn");

$("#concha_login").focus();

$("#alfa1").addClass("dnone");
$("#shubam").html(belga);

        }
      
    
    }); // fim do json









});


</script>



';
}

include "funcoes/facedefu.php";




?>



<div id='demonst_p' class="popup central boldim dnone" style="background-image:url(imagens/locacao%20carros%20compartilhamento%20fundo.jpg); background-size: 100% 100%">

<br><br><center>[VIDEO DEMONSTRATIVO YOUTUBE]</center>




</div>


<div id='aguard' class="popupu central boldim dnone" style="background-image:url(imagens/locacao%20carros%20compartilhamento%20fundo.jpg); background-size: 100% 100%">

<table border="0" cellspacing="0"><tr>
	

<td>
<img src="<?php echo $ponto; ?>imagens/compartilhamento aluguel carro aguarde.png" title="compartilhamento aluguel carro aguarde" alt="compartilhamento aluguel carro aguarde">

</td>

<td>

<center>
Aguarde...
</center>
</td>


</tr></table>


<br>



</div>
<?php


if($pagina != "principal"){

echo "<section>";

include "partials/drive_nav.php";


echo "</section>";

	if(($pagina == 'anuncio') OR ($pepo == 'anuncio')){
    //echo "<iframe class='dnone' src='../../funcoes/masco.php?pagina=principal'></iframe>";


}


}else{

if(($pagina == 'principal') OR ($pagina == 'anuncio') OR ($pepo == 'anuncio')){
    echo "<iframe class='dnone' src='funcoes/masco.php?pagina=principal'></iframe>";


}
	

}

if($pagina == 'cadastro/'){

echo "<iframe class='dnone' src='../funcoes/mascon.php?pagina=principal'></iframe>";

}


if(($pagina != 'painel/') AND ($pagina != 'anuncio') AND ($pagina != 'busca')){


if($logado != 'sim'){

$usuario = "indefinido";
}


visualiz_pag($pagina, $usuario);


}


if($pagina == 'anuncio'){


if($logado != 'sim'){

$usuario = "indefinido";
}


visualiz_anunc($id, $usuario);


}

// colocar funcao para regitro do tipo de busca


include "partials/painel_logado_suporte.php";

?>







<hr class="bujon"></hr>
<div class="encaixa" >
<center>
<h2> Parceiros</h2>
<div class="colored-line"></div><br><br>
</center>

</div><!--encaixa-->
<div class="regua central" style="">


<center>
<div style="display: table; min-width: 40%;">
<?php


$factor = sel_simples("parceiros_hh", "*", "order by rand() limit 5");

while($bildo = mysql_fetch_array($factor)){
	
	
    echo "<a href='https://www.".$bildo["link"]."/' title='$tit_u' alt='$alt_u' class='parc_quad' target='_blank' style=' margin-top:0px; float:left;'>

<div class='vikun'>
<table border='0' cellspacing='0' celpadding='0' class='caberd' width='100%' height='100%'><tr><td valign='center' align='center'>
<img src='".$ponto."imagens/parceiros/".$bildo["imagem"]."' title='$tit_u' alt='$alt_u' class='parc_ht' >


</td></tr></table>

</div>



<div class='reguad central'>".$bildo["nome"]."</div>

    </a>



    ";
	
	
	
} // wjhiçle


?>


</div></center>



</div>








<footer>
<?php

include "partials/footer.php";

?>
</footer>

<?php



?>

    

    </body>
</html>
