<?php
if($logado != "sim"){

	echo '

<div class="encaixa central" style="text-shadow: 1px 1px #000; color: #fff">
<br><br>

<div class="section-header" style="margin-top: -540px">
						<h3 class="" style="text-shadow: 1px 1px #000; color: #fff">Ops! Parece que você não está logado em nossa plataforma.</h3><div class="colored-line"></div></div>


Para cadastrar seu veículo, digite login e senha<br>

<br><br>

<input id="concha_loginn" placeholder="LOGIN / E-MAIL" class="input_frango"> &nbsp; &nbsp;

<input id="concha_passn" placeholder="SENHA" class="input_frango" type="password"><br>
<br>
<button id="loga_logon" class="pico" style="border-radius: 20px">ENTRAR</button>
<br><div id="shubamb" class="central vermelho"></div>
<div class="regua">
<left><a href="../senha/" title="Recuperar Senha">Esqueci minha senha</a><br></left>
</div><br>
Ou<br>
<br>
<fb:login-button size="xlarge" scope="public_profile,email" onlogin="checkLoginState();">
</fb:login-button>

<br><br><i style="color: #000; text-shadow: 1px 1px #fff">
<br>
Caso não seja cadastrado, <b><a href="../cadastro/" title="'.$tit_u.'">CADASTRE-SE</a> E APROVEITE!</b>.

</i>

<div class="reguad central vermelho" id="barkumin">

</div>


</div>

<br><br><br>


<div class="regua central" style="background-image: url(<?php echo $ponto; ?>imagens/locacao%20carros%20compartilhamento%20fundobv.jpg); margin-top:-160px">
<br><br><b>

Ao se cadastrar/logar você declara <u>concordar</u> com nossos <a href="'.$ponto.'termos-compromisso/" target="_blank" title="'.$tit_u.'">Termos de Compromisso</a>.</b>
<br><br>
</div>

<script>

$("#loga_logon").click(function(){

disab("concha_loginn", "concha_passn");

$("#shubamb").html("Aguarde...");

var rit = $("#concha_loginn").val() + ":::" + $("#concha_passn").val(); 

//alert(rit);
$.getJSON("'.$ponto.'funcoes/login_protegido_conv.php",
    {bingo: "'.getRealIpAddr().':::"+ rit},

    function(json){
        
        var belga = json.campo;

if(belga != "Login e/ou Senha Inválido(s)."){

        var bundana = json.prinome + "::" + json.tipo + "::" + json.nome + "::" + json.foto + "::" + json.id ;

//alert(bundana);

        setCookieno("brasilweb_instashare",bundana);

$("#shubamb").html(belga);

window.setTimeout("reseta();", 1000);


//cria cookie

        }else{


habil("concha_loginn", "concha_passn");

$("#concha_loginn").focus();
$("#shubamb").html(belga);

        }
      
    
    }); // fim do json


});


</script>






';


}else{

	include "partials/forminhocadcar.php";


// colocar aqui fo include do forma do cadastro do carro
}

}
