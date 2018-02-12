<style>
.fom{width: 320px!important}
label{width: 120px;}
</style>

<?php

if($logado == 'sim'){

echo "<script> window.location.href='http://www.instashare.me/'; </script>";

}

?>

<div class="encaixa melao" style="margin-top: -400px; ">


					<!-- SECTION HEADER -->
					<div class="section-header">
						<h2 class="" style="color: #fff;">Selecione uma das opções abaixo</h2><div class="colored-line"></div>
						


<center>
<br><br>
<fb:login-button size="xlarge" scope="public_profile,email" onlogin="checkLoginState();">
</fb:login-button>
<br><br><span style="color: #fff">OU</span></center><br>

            <div class="sub-heading" style="color: #fff">Preencha dados pessoais/empresarais</div>					</div>





<style>

.fgh{  border-radius: 15px; -ms-border-radius: 15px; -webkit-border-radius: 15px; -o-border-radius: 15px; -moz-border-radius: 15px; text-decoration:none;  padding: 7px;  border: 2px solid #eee; box-shadow: 1px 1px #000; cursor: pointer; display: inline-table; float: left; margin: 4px; color: #666; font-size: 14px; font-weight: bold;}


.fghj{border-radius: 15px; -ms-border-radius: 15px; -webkit-border-radius: 15px; -o-border-radius: 15px; -moz-border-radius: 15px; color:#FFFFFF!important; text-decoration:none;  padding: 7px;  border: 2px solid #eee; box-shadow: 1px 1px #000; cursor: pointer;background-color: rgba(10,23,55,0.5); text-decoration: none; cursor: pointer; display: inline-table; float: left; margin: 4px; font-size: 14px; font-weight: bold;}


</style>

<script>
  
/*
$("#pfisu").click(function(){
  //alert('foi');
 /* $("#pfis").removeClass("fgh");
  $("#pfis").addClass("fghj");
  
  $("#pjus").removeClass("fghj");
  $("#pjus").addClass("fgh");
  $("#pjuscont").addClass("dnone");
  $("#pfiscont").removeClass("dnone");
  */
});

/*
$("#pjus").click(function(){
  //alert('foi');
  /*$("#pjus").removeClass("fgh");
  $("#pjus").addClass("fghj");
  
  $("#pfis").removeClass("fghj");
  $("#pfis").addClass("fgh");
  $("#pjuscont").removeClass("dnone");
  $("#pfiscont").addClass("dnone");
  */
});


</script>

<div class="encaixa melao">

<center><div class="fghj" id="pfisu">

<img src="../imagens/pfis.png" style="height: 20px; width: auto; margin: 1px;" class="fadeImg" id='jjg'> 
P. Física

</div>

<div class="fgh" id="pjusu">


<img src="../imagens/pjusu.png" style="height: 20px; width: auto; margin: 1px;" class="fadeImg" id='ffg'> P. Jurídica

</div>

</center><br><br>


<script>
  

$("#pfisu").click(function(){
  //alert('foi');
 $("#pfisu").removeClass("fgh");
  $("#pfisu").addClass("fghj");
  $("#jjg").attr("src", "../imagens/pfis.png");
   $("#ffg").attr("src", "../imagens/pjusu.png");
  $("#pjusu").removeClass("fghj");
  $("#pjusu").addClass("fgh");
  $("#pjuscont").addClass("dnone");
  $("#pfiscont").removeClass("dnone");
  
});


$("#pjusu").click(function(){
  //alert('foi');
  $("#pjusu").removeClass("fgh");
  $("#pjusu").addClass("fghj");
    $("#jjg").attr("src", "../imagens/pfisu.png");
   $("#ffg").attr("src", "../imagens/pjus.png");
  $("#pfisu").removeClass("fghj");
  $("#pfisu").addClass("fgh");
  $("#pjuscont").removeClass("dnone");
  $("#pfiscont").addClass("dnone");
  
});


</script>


<div id='pfiscont'>
<table border='0'><tr><td>

<label>
<span>Nome</span>
            
          </label>
          <input id="nome_us" name="user[first_name]" class="fom requiredField validateInput" value="" type="text"></td><td><label>
 <span>Sobrenome</span>
            
          </label>
          <input id="sobrenome_us" name="user[last_name]" class="fom requiredField validateInput" value="" type="text">
          
</td></tr><tr>

<td>
<label>
<span>Email</span>
            
          </label>
          <input id="email_us" name="user[first_name]" class="fom requiredField validateInput" value="" type="text">

        </td><td>

          <label for="user_last_name">
            <span>Data Nasc.</span>
            
          </label>
          <input id="data_nasc" name="user[last_name]" class="fom requiredField validateInput" value="" type="text">
          
        </td>



</tr>

<tr>
  
<td>
<label>
<span>CPF</span><?php //echo $pagina; ?>
            
          </label>
          <input id="cpf" name="user[first_name]" class="fom requiredField validateInput" value="" type="text">

        </td><td>


 <label for="user_last_name">
            <span>Telefone</span>
            
          </label>
          <input id="telefonon" name="user[last_name]" class="fom requiredField validateInput" value="" type="text">
          

        </td>


</tr>
<tr>
<td>
<label>
<span>Senha</span><?php //echo $pagina; ?>
            
          </label>
          <input id="senhau" name="user[first_name]" class="fom requiredField validateInput" value="" type="password">

        </td><td>


 <label for="user_last_name">
            <span>Conf. Senha</span>
            
          </label>
          <input id="senhad" name="user[last_name]" class="fom requiredField validateInput" value="" type="password">
          

        </td>

</tr>

</table>


<div class="regua melao">

<button class="pico" onclick="cadastro_inicia()" style="border-radius: 20px">CADASTRAR</button>

</div>

</div>



<div id='pjuscont' class="dnone">







<table border='0'><tr><td>

<label>
<span>R. Social</span>
            
          </label>
          <input id="nome_usj" name="user[first_name]" class="fom requiredField validateInput" value="" type="text"></td><td><label>
 <span>N. Fantasia</span>
            
          </label>
          <input id="nome_f" name="user[last_name]" class="fom requiredField validateInput" value="" type="text">
          
</td></tr><tr>

<td>
<label>
<span>Email</span>
            
          </label>
          <input id="email_usj" name="user[first_name]" class="fom requiredField validateInput" value="" type="text">

        </td><td>

          <label for="user_last_name">
            <span>Data Fund.</span>
            
          </label>
          <input id="data_nascj" name="user[last_name]" class="fom requiredField validateInput" value="" type="text">
          
        </td>



</tr>

<tr>
  
<td>
<label>
<span>CNPJ</span><?php //echo $pagina; ?>
            
          </label>
          <input id="cnpj" name="user[first_name]" class="fom requiredField validateInput" value="" type="text">

        </td><td>


 <label for="user_last_name">
            <span>Telefone</span>
            
          </label>
          <input id="telefononj" name="user[last_name]" class="fom requiredField validateInput" value="" type="text">
          

        </td>


</tr>


<tr>


<td>
<label>
<span>Senha</span><?php //echo $pagina; ?>
            
          </label>
          <input id="senhauj" name="user[first_name]" class="fom requiredField validateInput" value="" type="password">

        </td><td>


 <label for="user_last_name">
            <span>Conf.. Senha</span>
            
          </label>
          <input id="senhadj" name="user[last_name]" class="fom requiredField validateInput" value="" type="password">
          

        </td>

</td>

</tr>
</table>



















<div class="regua melao">

<button class="pico" onclick="cadastro_iniciajuri()" style="border-radius: 20px">CADASTRAR</button>

</div>
</div>









<div class="reguad central vermelho" id='bunjunda'>

</div><!--bujunda-->



<div class="encaixa central">

Ao se cadastrar você declara <u>concordar</u> com nossos <a href="'.$ponto.'termos-compromisso/" target="_blank" title="'.$tit_u.'">Termos de Compromisso</a>.</b>

</div>



</div><!--encaixa-->


</div>

<div id="anuncio_cad" class="central vermelho">
  </div>
<script>

function cadastro_inicia(){

//alert('foi');

if(($("#nome_us").val() == "") || ($("#sobrenome_us").val() == "") || ($("#email_us").val() == "") || ($("#telefonon").val() == "") || ($("#cpf").val() == "") || ($("#data_nasc").val() == "") || ($("#senhau").val() == "") || ($("#senhad").val() == "")){

$("#bunjunda").html("Preencha todos os campos!");



}else{
//if verifica email


//se email for valido
$("#nome_us").prop('disabled', true); $("#sobrenome_us").prop('disabled', true); $("#email_us").prop('disabled', true); $("#telefonon").prop('disabled', true); $("#cpf").prop('disabled', true); $("#data_nasc").prop('disabled', true); $("#senhau").prop('disabled', true); $("#senhad").prop('disabled', true);

$("#bunjunda").html("Aguarde...");


var nome = $("#nome_us").val(), sobrem = $("#sobrenome_us").val(), mail = $("#email_us").val(), telef = $("#telefonon").val(),  cpf = $("#cpf").val(), datan = $("#data_nasc").val(), senha = $("#senhau").val();





// fa o json

//alert(nome+"::"+sobrem+"::"+mail+"::"+telef+"::"+cpf+"::"+datan+"::fisica::"+senha);
//alert(nome+"::"+sobrem+"::"+mail+"::"+telef+"::"+cpf+"::"+datan+"::fisica::"+senha);


$.getJSON("<?php echo $ponto; ?>funcoes/cadastro_filtros.php",
    {bingo: nome+"::"+sobrem+"::"+mail+"::"+telef+"::"+cpf+"::"+datan+"::fisica::"+senha},

  function(json){


var iki = json.campo;
var nino = json.campon;

concretiz_cad(iki, nino);
    }); //fim do jason

} // if



}





function cadastro_iniciajuri(){

//alert('foi');

if(($("#nome_usj").val() == "") || ($("#nome_f").val() == "") || ($("#email_usj").val() == "") || ($("#telefononj").val() == "") || ($("#cnpj").val() == "") || ($("#data_nascj").val() == "") || ($("#senhauj").val() == "") || ($("#senhadj").val() == "")){

$("#bunjunda").html("Preencha todos os campos!");

alert(nome+"::"+sobrem+"::"+mail+"::"+telef+"::"+cpf+"::"+datan+"::fisica::"+senha);

}else{
//if verifica email


//se email for valido
$("#nome_usj").prop('disabled', true); $("#nome_f").prop('disabled', true); $("#email_usj").prop('disabled', true); $("#telefononj").prop('disabled', true); $("#cnpj").prop('disabled', true); $("#data_nascj").prop('disabled', true); $("#senhauj").prop('disabled', true); $("#senhadj").prop('disabled', true), senha = $("#senhauj").val();

$("#bunjunda").html("Aguarde...");


var nome = $("#nome_usj").val(), sobrem = $("#nome_f").val(), mail = $("#email_usj").val(), telef = $("#telefononj").val(),  cpf = $("#cnpj").val(), datan = $("#data_nascj").val();



//alert(nome+"::"+sobrem+"::"+mail+"::"+telef+"::"+cpf+"::"+datan+"::juridica::"+senha);

// fa o json




$.getJSON("<?php echo $ponto; ?>funcoes/cadastro_filtros.php",
    {bingo: nome+"::"+sobrem+"::"+mail+"::"+telef+"::"+cpf+"::"+datan+"::juridica::"+senha},

  function(json){

var iki = json.campo;

var nino = json.campon;

concretiz_cad(iki, nino);
    }); //fim do jason

} // if



} // fim da fincao





function concretiz_cad(campo, campod){


$("#bunjunda").html(campo);

if(campo == 'Usuário já cadastrado. Estamos te redirecionando para o login. Aguarde...'){

$("#concha_login").val(campod);

login_entra();


}else{



setCookieno("brasilweb_instashare", campod);

window.location.href='https://www.instashare.me/painel/'; 

} // ger





}


</script>