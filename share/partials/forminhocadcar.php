
<div class="encaixa" style="margin-top: -500px;">
<?php

$status_cad = frinha("cadcomp", "status", 'id_usr', $idzinho);

//echo $status_cad;
//echo $idzinho;
if($status_cad == '1'){

echo "<center><br><div class='avisoni reguad central' style='margin-bottom:60px;'>


<b> $nome_l,</a> seu cadastro está incompleto! <a href='../completar-cadastro/' title='$tit_u'><b>Clique aqui</b></a> para atualizar seus dados!<br>A atualização dos dados é necessária para compartilhar e contratar veículos compartilhados.

</div><br></center>";

}else{


echo "<center><br><div class='avisonin reguad central'>
</div>
<br></center>";


}




?>

<div class="regua" style="margin-top: -70px; margin-bottom: 40px;">

<div class="ativofu vcincoper gujo">

<span style="font-size: 42px; line-height: 42px; display: inline-table; float: left; border: 4px solid #666; border-radius: 50%; width: 80px; text-align:center; vertical-align:center; line-height: 70px; height: 70px; color: #666">01</span>
<span style="font-size: 12px; line-height:16px; margin-top:25px; display: inline-table; float: left; margin-left: 7px; ">Qual é o seu carro?<br />Onde ele está?</span>

</div>







<div class="inativofu vcincoper gujo">

<span style="font-size: 42px; line-height: 42px; display: inline-table; float: left; border: 4px solid #666; border-radius: 50%; width: 80px; text-align:center; vertical-align:center; line-height: 70px; height: 70px; color: #666">02</span>
<span style='font-size: 12px; line-height:16px; margin-top:25px; display: inline-table; float: left; margin-left: 7px;'>Sua segurança<br />Ativando o seguro

</div>




<div class="inativofu vcincoper gujo">

<span style="font-size: 42px; line-height: 42px; display: inline-table; float: left; border: 4px solid #666; border-radius: 50%;width: 80px; text-align:center; vertical-align:center; line-height: 70px; height: 70px; color: #666">03</span>
<span style='font-size: 12px; line-height:16px; margin-top:25px; display: inline-table; float: left; margin-left: 7px;'>Valorize seu carro<br />Descrição e Fotos

</div>



<div class="inativofu vcincoper gujo">

<span style="font-size: 42px; line-height: 42px; display: inline-table; float: left; border: 4px solid #666; border-radius: 50%;width: 80px; text-align:center; vertical-align:center; line-height: 70px; height: 70px;color: #666">04</span>
<span style='font-size: 12px; line-height:16px; margin-top:25px; display: inline-table; float: left; margin-left: 7px; '>Compartilhe<br /><b>Bons negócios!

</div>



</div><!--titulos em cima-->


</div>
<style>
.mova{    height: 34px;
    padding: 6px 12px;
    font-size: 14px;}
#baril_c h3{text-decoration: ;}

</style>
<div class="encaixa reguad formboardo" style="


display: inline-table; 
            font-size: 14px;          /* Para branco, use 255,255,255,0 e 255,255,255,1 */
background: -moz-linear-gradient(top, rgba(255,0,0,0) 0%, rgba(255,0,0,1) 100%);
  background: -webkit-linear-gradient(top, rgba(255,0,0,1) 0%,rgba(255,0,0,1) 100%);
  background: linear-gradient(to top, rgba(255,0,0,0) 0%,rgba(255,255,255,255) 100%);
                      /* Para branco, use #00ffffff e #ffffff abaixo */
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00ff0000', endColorstr='#ffff',GradientType=0 );
 border-top-right-radius: 12px; border-top-left-radius: 12px;

" id="baril_c">


<h2>Dados Gerais</h2>



<div class="regua">





	<h3 class="form-passos-t-s">Tipo do veículo</h3>

<div style="display: inline-table; float: left;">
<select id="tipo veiculo" class="mova">
	<option value value="1"> Buggy</option><option value="2"> Conversível</option><option value="3"> Cupê</option><option value="4"> Hatchback</option><option value="5"> Minivan</option><option value="6"> Perua/SW</option><option value="7"> Picape</option><option value="8"> Sedã</option><option value="9"> Esportivo</option>




<option value="10"> Van</option></select>
</div> 


<div style="display: inline-table; float: left; margin-left: 10px;">


 <select id="primeiropasso-marca" class="mova" name="PrimeiroPasso[marca]" aria-required="true" data-s2-options="s2options_d6851687" data-krajee-select2="select2_e748dc4b" style="width: 120px;">



 	<option value="">Marca</option><option value="1">Acura</option><option value="2">Agrale</option><option value="3">Alfa Romeo</option><option value="4">AM Gen</option><option value="5">Asia Motors</option><option value="189">Aston Martin</option><option value="6">Audi</option><option value="7">BMW</option><option value="8">BRM</option><option value="9">Buggy</option><option value="123">Bugre</option><option value="10">Cadillac</option><option value="11">CBT Jipe</option><option value="136">Chana</option><option value="182">Changan</option><option value="161">Chery</option><option value="12">Chrysler</option><option value="13">Citroën</option><option value="14">Cross Lander</option><option value="15">Daewoo</option><option value="16">Daihatsu</option><option value="17">Dodge</option><option value="147">Effa</option><option value="18">Engesa</option><option value="19">Envemo</option><option value="20">Ferrari</option><option value="21">Fiat</option><option value="149">Fibravan</option><option value="22">Ford</option><option value="190">Foton</option><option value="170">Fyber</option><option value="199">Geely</option><option value="23">GM - Chevrolet</option><option value="153">Great Wall</option><option value="24">Gurgel</option><option value="152">Hafei</option><option value="25">Honda</option><option value="26">Hyundai</option><option value="27">Isuzu</option><option value="177">JAC</option><option value="28">Jaguar</option><option value="29">Jeep</option><option value="154">Jinbei</option><option value="30">JPX</option><option value="31">Kia Motors</option><option value="32">Lada</option><option value="171">Lamborghini</option><option value="33">Land Rover</option><option value="34">Lexus</option><option value="168">Lifan</option><option value="127">Lobini</option><option value="35">Lotus</option><option value="140">Mahindra</option><option value="36">Maserati</option><option value="37">Matra</option><option value="38">Mazda</option><option value="39">Mercedes-Benz</option><option value="40">Mercury</option><option value="167">MG</option><option value="156">MINI</option><option value="41">Mitsubishi</option><option value="42">Miura</option><option value="43">Nissan</option><option value="44">Peugeot</option><option value="45">Plymouth</option><option value="46">Pontiac</option><option value="47">Porsche</option><option value="185">RAM</option><option value="186">Rely</option><option value="48">Renault</option><option value="195">Rolls-Royce</option><option value="49">Rover</option><option value="50">Saab</option><option value="51">Saturn</option><option value="52">Seat</option><option value="183">Shineray</option><option value="157">smart</option><option value="125">SsangYong</option><option value="54">Subaru</option><option value="55">Suzuki</option><option value="165">TAC</option><option value="56">Toyota</option><option value="57">Troller</option><option value="58">Volvo</option><option value="59">VW - VolksWagen</option><option value="163">Wake</option><option value="120">Walk</option></select>


</div>


<div style="display: inline-table; float: left; margin-left: 10px;">


	<input type="text" id="modelov" placeholder="MODELO" class="mova">

</div>



<div style="display: inline-table; float: left; margin-left: 10px;">


<select class='mova' id="ano veic">
<option value="">ANO</option>


<option value="2018">2018</option>
<option value="2017">2017</option>
<option value="2016">2016</option>
<option value="2015">2015</option>
<option value="2014">2014</option>
<option value="2013">2013</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>


</select>
</div>




<div style="display: inline-table; float: left; margin-left: 10px;">


<select class='mova' id="cambio_veic">



<option value="manual">CÂMBIO MANUAL</option>
<option value="automátco">CÂMBIO AUTOMÁTICO</option>



</select>
</div>


<div style="display: inline-table; float: left; margin-left: 10px;">
<select class='mova' id="combust">


	<option value="Gasolina">GASOLINA</option>

<option value="Álcool">ALCOOL</option>

<option value="Diesel">DIESEL</option>

<option value="Flex">FLEX</option>



</select>




</div>


</div><!--regua-->

<hr><h3 class="form-passos-t-s">Opcionais</h3>



<div class="row "><div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><div class="form-group field-primeiropasso-opcionais"><div><input type="hidden" name="PrimeiroPasso[opcionais]" value=""><div id="primeiropasso-opcionais" class="c-checkbox"><label class="checkbox-inline"><input type="checkbox" name="PrimeiroPasso[opcionais][]" value="11"> Vidros Elétricos</label><label class="checkbox-inline"><input type="checkbox" name="PrimeiroPasso[opcionais][]" value="22"> Bluetooth</label><label class="checkbox-inline"><input type="checkbox" name="PrimeiroPasso[opcionais][]" value="21"> USB</label><label class="checkbox-inline"><input type="checkbox" name="PrimeiroPasso[opcionais][]" value="20"> Cadeira para Criança</label><label class="checkbox-inline"><input type="checkbox" name="PrimeiroPasso[opcionais][]" value="19"> Sensor de Estacionamento</label><label class="checkbox-inline"><input type="checkbox" name="PrimeiroPasso[opcionais][]" value="18"> Aquecedor de Banco</label><label class="checkbox-inline"><input type="checkbox" name="PrimeiroPasso[opcionais][]" value="16"> 4X4</label><label class="checkbox-inline"><input type="checkbox" name="PrimeiroPasso[opcionais][]" value="15"> Comando de Voz</label><label class="checkbox-inline"><input type="checkbox" name="PrimeiroPasso[opcionais][]" value="14"> Suporte para Bike</label><label class="checkbox-inline"><input type="checkbox" name="PrimeiroPasso[opcionais][]" value="1"> ABS</label><label class="checkbox-inline"><input type="checkbox" name="PrimeiroPasso[opcionais][]" value="10"> Rodas de Liga Leve</label><label class="checkbox-inline"><input type="checkbox" name="PrimeiroPasso[opcionais][]" value="9"> Rack de Teto</label><label class="checkbox-inline"><input type="checkbox" name="PrimeiroPasso[opcionais][]" value="8"> GPS</label><label class="checkbox-inline"><input type="checkbox" name="PrimeiroPasso[opcionais][]" value="7"> Direção Hidráulica</label><label class="checkbox-inline"><input type="checkbox" name="PrimeiroPasso[opcionais][]" value="4"> Ar Condicionado</label><label class="checkbox-inline"><input type="checkbox" name="PrimeiroPasso[opcionais][]" value="3"> Alarme</label><label class="checkbox-inline"><input type="checkbox" name="PrimeiroPasso[opcionais][]" value="2"> Air Bag</label></div><p class="help-block help-block-error"></p></div></div> </div></div><hr>






<h3 class="form-passos-t-s">Preço do Aluguel</h3>


<input type="text" class="mova" id="preco_alug" style="width:100px"> ,00 / Dia

<iframe class="dnone" id="suvino" src="../funcoes/mukov.php"></iframe>

<hr>



<h3 class="form-passos-t-s">O que é permitido?</h3><div class="row "><div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><div class="form-group field-primeiropasso-animais"><div class="checkbox"><label class="checkbox" for="primeiropasso-animais"><input type="hidden" name="PrimeiroPasso[animais]" value="0"><input type="checkbox" id="primeiropasso-animais" name="PrimeiroPasso[animais]" value="1">
Animais de estimação
</label><p class="help-block help-block-error"></p></div></div><div class="form-group field-primeiropasso-viagem"><div class="checkbox"><label class="checkbox" for="primeiropasso-viagem"><input type="hidden" name="PrimeiroPasso[viagem]" value="0"><input type="checkbox" id="primeiropasso-viagem" name="PrimeiroPasso[viagem]" value="1">
Viagens
</label><p class="help-block help-block-error"></p></div></div><div class="form-group field-primeiropasso-fumar"><div class="checkbox"><label class="checkbox" for="primeiropasso-fumar"><input type="hidden" name="PrimeiroPasso[fumar]" value="0"><input type="checkbox" id="primeiropasso-fumar" name="PrimeiroPasso[fumar]" value="1">
Fumar
</label><p class="help-block help-block-error"></p></div></div> </div></div><hr><h3 class="form-passos-t-s">Delivery</h3><div class="row "><div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><div class="form-group field-primeiropasso-levoate_voce"><div class="checkbox"><label class="checkbox" for="primeiropasso-levoate_voce"><input type="hidden" name="PrimeiroPasso[levoate_voce]" value="0"><input type="checkbox" id="primeiropasso-levoate_voce" name="PrimeiroPasso[levoate_voce]" value="1">
Eu posso levar o carro até o locatário
</label><p class="help-block help-block-error"></p></div></div> </div></div><hr><div class="row"><div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><h3 class="form-passos-t-s">Localização</h3><p>O Instashare leva muito a serio a sua privacidade, portanto somente divulgamos a localização <br>



exata somente após a sua confirmação.</p><div class="form-cadatro-carro-passo"><div class="row"><div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">




	<div class="form-group field-primeiropasso-cep required"><label class="control-label" for="primeiropasso-cep">CEP</label>





	<input type="text" id="cep_vvv" class="form-control" name="PrimeiroPasso[cep]" data-plugin-inputmask="inputmask_0bf71e59" style="width:200px;"><p class="help-block help-block-error"></p></div>





	 </div><div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">




<div class="form-group field-primeiropasso-numero required" style="display: inline-table; float: left;"><label class="control-label" for="primeiropasso-numero">Logradouro</label>



		<input type="text" id="logradouro" class="form-control" name="PrimeiroPasso[numero]" aria-required="true" style="width: 400px;"><p class="help-block help-block-error"></p></div> 




		<div class="form-group field-primeiropasso-numero required" style="display: inline-table; float: left;"><label class="control-label" for="primeiropasso-numero">Número</label>



		<input type="text" id="primeiropasso-numero" class="form-control" name="PrimeiroPasso[numero]" aria-required="true" style="width: 100px;"><p class="help-block help-block-error"></p></div> 




	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><div class="form-group field-primeiropasso-complemento"><label class="control-label" for="primeiropasso-complemento">Complemento</label>




		<input type="text" id="primeiropasso-complemento" class="form-control" name="PrimeiroPasso[complemento]" style="width: 100px;">




			<hr><div class="row"><div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">



			<button type="submit" id="form-envia" class="pino" style="margin-left: -350px;">Continuar</button>




	</div><!-- perimiro form-->

	<br><br>

</div></div></div></div>


<div class="encaixa">
<hr class="bujo"></hr></div>