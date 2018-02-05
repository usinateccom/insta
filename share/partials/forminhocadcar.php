
<div class="encaixa" style="margin-top: -500px;">
<?php

$status_cad = frinha("cadcomp", "status", 'id_usr', $idzinho);

//echo $status_cad;
//echo $idzinho;
if($status_cad == '1'){

echo "<center><br><div class='avisoni reguad central'>


<b> $nome_l,</a> seu cadastro está incompleto! <a href='../completar-cadastro/' title='$tit_u'><b>Clique aqui</b></a> para atualizar seus dados!<br>A atualização dos dados é necessária para compartilhar e contratar veículos compartilhados.

</div><br></center>";

}else{


echo "<center><br><div class='avisonin reguad central'>
</div>
<br></center>";


}




?>

<div class="regua">

<div class="ativof vcincoper">

<span style="font-size: 42px; line-height: 42px; display: inline-table; float: left; border: 1px solid #eee; border-radius: 50%;">01</span>
<span style="font-size: 9px; line-height:11px; display: inline-table; float: left; margin-left: 7px; margin-top: 15px;">Qual é o Seu carro?<br />Onde ele está?</span>

</div>







<div class="inativof vcincoper">

<span style="font-size: 42px; line-height: 42px; display: inline-table; float: left; border: 1px solid #eee; border-radius: 50%;">02</span>
<span style='font-size: 9px; line-height:11px; display: inline-table; float: left; margin-left: 7px; margin-top: 15px;'>Sua segurança<br />Ativando o seguro

</div>




<div class="inativof vcincoper">

<span style="font-size: 42px; line-height: 42px; display: inline-table; float: left; border: 1px solid #eee; border-radius: 50%;">03</span>
<span style='font-size: 9px; line-height:11px; display: inline-table; float: left; margin-left: 7px; margin-top: 15px;'>Valorize seu carro<br />Descrição e Fotos

</div>



<div class="inativof vcincoper">

<span style="font-size: 42px; line-height: 42px; display: inline-table; float: left; border: 1px solid #eee; border-radius: 50%;">04</span>
<span style='font-size: 9px; line-height:11px; display: inline-table; float: left; margin-left: 7px; margin-top: 15px;'>Compartilhe<br /><b>Bons negócios!

</div>



</div><!--titulos em cima-->


</div>

<div class="encaixa reguad formboard dnone">


<h2>Dados Gerais</h2>


<form id="PrimeiroPasso" action="/veiculo/novo/passo-1" method="post" autocomplete="off"><input type="hidden" name="_csrf" value="SXNTYWtsTDMnJmo3WzYDfw4JHDYGPCV1JUIFJhw4NWcIMDQjNFp8Qw=="> <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9"><h2 class="form-passos-t-s">Tipo do veículo</h2><div class="form-cadatro-carro-passo"><div class="form-group field-primeiropasso-tipo required"><div><input type="hidden" name="PrimeiroPasso[tipo]" value=""><div id="primeiropasso-tipo" class="c-radio" aria-required="true"><label class="radio-inline"><input type="radio" name="PrimeiroPasso[tipo]" value="1"> Buggy</label><label class="radio-inline"><input type="radio" name="PrimeiroPasso[tipo]" value="2"> Conversível</label><label class="radio-inline"><input type="radio" name="PrimeiroPasso[tipo]" value="3"> Cupê</label><label class="radio-inline"><input type="radio" name="PrimeiroPasso[tipo]" value="4"> Hatchback</label><label class="radio-inline"><input type="radio" name="PrimeiroPasso[tipo]" value="5"> Minivan</label><label class="radio-inline"><input type="radio" name="PrimeiroPasso[tipo]" value="6"> Perua/SW</label><label class="radio-inline"><input type="radio" name="PrimeiroPasso[tipo]" value="7"> Picape</label><label class="radio-inline"><input type="radio" name="PrimeiroPasso[tipo]" value="8"> Sedã</label><label class="radio-inline"><input type="radio" name="PrimeiroPasso[tipo]" value="9"> Esportivo</label><label class="radio-inline"><input type="radio" name="PrimeiroPasso[tipo]" value="10"> Van</label></div><p class="help-block help-block-error"></p></div></div> <hr><div class="row"><div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"><div class="form-group field-primeiropasso-marca required"><div class="kv-plugin-loading loading-primeiropasso-marca">&nbsp;</div><select id="primeiropasso-marca" class="form-control" name="PrimeiroPasso[marca]" aria-required="true" data-s2-options="s2options_d6851687" data-krajee-select2="select2_e748dc4b" style="display:none"><option value="">Marca</option><option value="1">Acura</option><option value="2">Agrale</option><option value="3">Alfa Romeo</option><option value="4">AM Gen</option><option value="5">Asia Motors</option><option value="189">Aston Martin</option><option value="6">Audi</option><option value="7">BMW</option><option value="8">BRM</option><option value="9">Buggy</option><option value="123">Bugre</option><option value="10">Cadillac</option><option value="11">CBT Jipe</option><option value="136">Chana</option><option value="182">Changan</option><option value="161">Chery</option><option value="12">Chrysler</option><option value="13">Citroën</option><option value="14">Cross Lander</option><option value="15">Daewoo</option><option value="16">Daihatsu</option><option value="17">Dodge</option><option value="147">Effa</option><option value="18">Engesa</option><option value="19">Envemo</option><option value="20">Ferrari</option><option value="21">Fiat</option><option value="149">Fibravan</option><option value="22">Ford</option><option value="190">Foton</option><option value="170">Fyber</option><option value="199">Geely</option><option value="23">GM - Chevrolet</option><option value="153">Great Wall</option><option value="24">Gurgel</option><option value="152">Hafei</option><option value="25">Honda</option><option value="26">Hyundai</option><option value="27">Isuzu</option><option value="177">JAC</option><option value="28">Jaguar</option><option value="29">Jeep</option><option value="154">Jinbei</option><option value="30">JPX</option><option value="31">Kia Motors</option><option value="32">Lada</option><option value="171">Lamborghini</option><option value="33">Land Rover</option><option value="34">Lexus</option><option value="168">Lifan</option><option value="127">Lobini</option><option value="35">Lotus</option><option value="140">Mahindra</option><option value="36">Maserati</option><option value="37">Matra</option><option value="38">Mazda</option><option value="39">Mercedes-Benz</option><option value="40">Mercury</option><option value="167">MG</option><option value="156">MINI</option><option value="41">Mitsubishi</option><option value="42">Miura</option><option value="43">Nissan</option><option value="44">Peugeot</option><option value="45">Plymouth</option><option value="46">Pontiac</option><option value="47">Porsche</option><option value="185">RAM</option><option value="186">Rely</option><option value="48">Renault</option><option value="195">Rolls-Royce</option><option value="49">Rover</option><option value="50">Saab</option><option value="51">Saturn</option><option value="52">Seat</option><option value="183">Shineray</option><option value="157">smart</option><option value="125">SsangYong</option><option value="54">Subaru</option><option value="55">Suzuki</option><option value="165">TAC</option><option value="56">Toyota</option><option value="57">Troller</option><option value="58">Volvo</option><option value="59">VW - VolksWagen</option><option value="163">Wake</option><option value="120">Walk</option></select><p class="help-block help-block-error"></p></div> </div><div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"><div class="form-group field-primeiropasso-modelo required"><div class="kv-plugin-loading loading-primeiropasso-modelo">&nbsp;</div><select id="primeiropasso-modelo" class="form-control" name="PrimeiroPasso[modelo]" data-krajee-depdrop="depdrop_c32d2d56" data-s2-options="s2options_d6851687" data-krajee-select2="select2_06acf5fe" style="display:none"></select><p class="help-block help-block-error"></p></div> </div><div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"><div class="form-group field-primeiropasso-ano required"><div class="kv-plugin-loading loading-primeiropasso-ano">&nbsp;</div><select id="primeiropasso-ano" class="form-control" name="PrimeiroPasso[ano]" data-krajee-depdrop="depdrop_19406cec" data-s2-options="s2options_d6851687" data-krajee-select2="select2_06acf5fe" style="display:none"></select><p class="help-block help-block-error"></p></div> </div></div><div class="row"><div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"><div class="form-group field-primeiropasso-cambio required"><div class="kv-plugin-loading loading-primeiropasso-cambio">&nbsp;</div><select id="primeiropasso-cambio" class="form-control" name="PrimeiroPasso[cambio]" aria-required="true" data-s2-options="s2options_d6851687" data-krajee-select2="select2_be20471f" style="display:none"><option value="">Câmbio</option><option value="1">Automático</option><option value="2">Automático Sequencial</option><option value="3">Manual</option><option value="4">Semi-Automático</option><option value="5">CVT</option></select><p class="help-block help-block-error"></p></div> </div><div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"><div class="form-group field-primeiropasso-combustivel required"><div class="kv-plugin-loading loading-primeiropasso-combustivel">&nbsp;</div><select id="primeiropasso-combustivel" class="form-control" name="PrimeiroPasso[combustivel]" aria-required="true" data-s2-options="s2options_d6851687" data-krajee-select2="select2_59d94043" style="display:none"><option value="">Combustivel</option><option value="1">Gasolina</option><option value="2">Álcool</option><option value="3">Diesel</option><option value="4">Gás Natural</option><option value="5">Flex (Gasolina &amp; Álcool)</option><option value="6">Gasolina &amp; Gás Natural</option><option value="7">Álcool &amp; Gás Natural</option><option value="8">Gasolina, Álcool &amp; Gás Natural</option><option value="9">Hybrid (Gasolina &amp; Eletrico)</option></select><p class="help-block help-block-error"></p></div> </div><div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"><div class="form-group field-primeiropasso-cor required"><div class="kv-plugin-loading loading-primeiropasso-cor">&nbsp;</div><select id="primeiropasso-cor" class="form-control" name="PrimeiroPasso[cor]" aria-required="true" data-s2-options="s2options_d6851687" data-krajee-select2="select2_b70e3589" style="display:none"><option value="">Cor</option><option value="1">Branco</option><option value="2">Preto</option><option value="3">Prata</option><option value="4">Cinza</option><option value="5">Vermelho</option><option value="6">Azul</option><option value="7">Dourado</option><option value="8">Amarelo</option><option value="9">Verde</option><option value="10">Marrom</option><option value="11">Bege</option><option value="12">Outros</option></select><p class="help-block help-block-error"></p></div> </div></div><hr><h2 class="form-passos-t-s">Opcionais</h2><div class="row "><div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><div class="form-group field-primeiropasso-opcionais"><div><input type="hidden" name="PrimeiroPasso[opcionais]" value=""><div id="primeiropasso-opcionais" class="c-checkbox"><label class="checkbox-inline"><input type="checkbox" name="PrimeiroPasso[opcionais][]" value="11"> Vidros Elétricos</label><label class="checkbox-inline"><input type="checkbox" name="PrimeiroPasso[opcionais][]" value="22"> Bluetooth</label><label class="checkbox-inline"><input type="checkbox" name="PrimeiroPasso[opcionais][]" value="21"> USB</label><label class="checkbox-inline"><input type="checkbox" name="PrimeiroPasso[opcionais][]" value="20"> Cadeira para Criança</label><label class="checkbox-inline"><input type="checkbox" name="PrimeiroPasso[opcionais][]" value="19"> Sensor de Estacionamento</label><label class="checkbox-inline"><input type="checkbox" name="PrimeiroPasso[opcionais][]" value="18"> Aquecedor de Banco</label><label class="checkbox-inline"><input type="checkbox" name="PrimeiroPasso[opcionais][]" value="16"> 4X4</label><label class="checkbox-inline"><input type="checkbox" name="PrimeiroPasso[opcionais][]" value="15"> Comando de Voz</label><label class="checkbox-inline"><input type="checkbox" name="PrimeiroPasso[opcionais][]" value="14"> Suporte para Bike</label><label class="checkbox-inline"><input type="checkbox" name="PrimeiroPasso[opcionais][]" value="1"> ABS</label><label class="checkbox-inline"><input type="checkbox" name="PrimeiroPasso[opcionais][]" value="10"> Rodas de Liga Leve</label><label class="checkbox-inline"><input type="checkbox" name="PrimeiroPasso[opcionais][]" value="9"> Rack de Teto</label><label class="checkbox-inline"><input type="checkbox" name="PrimeiroPasso[opcionais][]" value="8"> GPS</label><label class="checkbox-inline"><input type="checkbox" name="PrimeiroPasso[opcionais][]" value="7"> Direção Hidráulica</label><label class="checkbox-inline"><input type="checkbox" name="PrimeiroPasso[opcionais][]" value="4"> Ar Condicionado</label><label class="checkbox-inline"><input type="checkbox" name="PrimeiroPasso[opcionais][]" value="3"> Alarme</label><label class="checkbox-inline"><input type="checkbox" name="PrimeiroPasso[opcionais][]" value="2"> Air Bag</label></div><p class="help-block help-block-error"></p></div></div> </div></div><hr><h2 class="form-passos-t-s">Preço do Aluguel</h2><div class="row "><div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><div class="form-group field-primeiropasso-valor_dia required"><input type="hidden" id="primeiropasso-valor_dia" class="" name="PrimeiroPasso[valor_dia]"><p class="help-block help-block-error"></p></div> <div class="form-group field-primeiropasso-valor_semana required"><input type="hidden" id="primeiropasso-valor_semana" class="" name="PrimeiroPasso[valor_semana]"><p class="help-block help-block-error"></p></div> <div class="form-group field-primeiropasso-valor_mes required"><input type="hidden" id="primeiropasso-valor_mes" class="" name="PrimeiroPasso[valor_mes]"><p class="help-block help-block-error"></p></div> <span>Dia</span><span class="text-right pull-right" id="valor-dia">R$ 0</span><div id="slider-range"></div></div></div><hr><h2 class="form-passos-t-s">O que é permitido?</h2><div class="row "><div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><div class="form-group field-primeiropasso-animais"><div class="checkbox"><label class="checkbox" for="primeiropasso-animais"><input type="hidden" name="PrimeiroPasso[animais]" value="0"><input type="checkbox" id="primeiropasso-animais" name="PrimeiroPasso[animais]" value="1">
Animais de estimação
</label><p class="help-block help-block-error"></p></div></div><div class="form-group field-primeiropasso-viagem"><div class="checkbox"><label class="checkbox" for="primeiropasso-viagem"><input type="hidden" name="PrimeiroPasso[viagem]" value="0"><input type="checkbox" id="primeiropasso-viagem" name="PrimeiroPasso[viagem]" value="1">
Viagens
</label><p class="help-block help-block-error"></p></div></div><div class="form-group field-primeiropasso-fumar"><div class="checkbox"><label class="checkbox" for="primeiropasso-fumar"><input type="hidden" name="PrimeiroPasso[fumar]" value="0"><input type="checkbox" id="primeiropasso-fumar" name="PrimeiroPasso[fumar]" value="1">
Fumar
</label><p class="help-block help-block-error"></p></div></div> </div></div><hr><h2 class="form-passos-t-s">Delivery</h2><div class="row "><div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><div class="form-group field-primeiropasso-levoate_voce"><div class="checkbox"><label class="checkbox" for="primeiropasso-levoate_voce"><input type="hidden" name="PrimeiroPasso[levoate_voce]" value="0"><input type="checkbox" id="primeiropasso-levoate_voce" name="PrimeiroPasso[levoate_voce]" value="1">
Eu posso levar o carro até o locatário
</label><p class="help-block help-block-error"></p></div></div> </div></div><hr><div class="row"><div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><h2 class="form-passos-t-s">Localização</h2><p>O Instashare leva muito a serio a sua privacidade, portanto somente divulgamos a localização <br>
exata somente após a sua confirmação.</p><div class="form-cadatro-carro-passo"><div class="row"><div class="col-xs-12 col-sm-3 col-md-3 col-lg-3"><div class="form-group field-primeiropasso-cep required"><label class="control-label" for="primeiropasso-cep">CEP</label><input type="text" id="primeiropasso-cep" class="form-control" name="PrimeiroPasso[cep]" data-plugin-inputmask="inputmask_0bf71e59"><p class="help-block help-block-error"></p></div> </div><div class="col-xs-12 col-sm-3 col-md-3 col-lg-3"><div class="form-group field-primeiropasso-numero required"><label class="control-label" for="primeiropasso-numero">Número</label><input type="text" id="primeiropasso-numero" class="form-control" name="PrimeiroPasso[numero]" aria-required="true"><p class="help-block help-block-error"></p></div> </div><div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><div class="form-group field-primeiropasso-complemento"><label class="control-label" for="primeiropasso-complemento">Complemento</label><input type="text" id="primeiropasso-complemento" class="form-control" name="PrimeiroPasso[complemento]"><p class="help-block help-block-error"></p></div> </div></div><div class="row"><div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><div class="perfil-carro-mapa vp-minhas-reservas-map"><div id="map-canvas-cadastro" style="width: 100%; height: 250px; margin-bottom: 15px;"></div><p id="add-info" class="vp-minhas-reservas-map-info hide"><strong>Logradouro: </strong><span id="cadlogradouro"></span><br><strong>Bairro: </strong><span id="cadbairro"></span><br><strong>Cidade: </strong><span id="cadcidade"></span><br><strong>Estado: </strong><span id="cadestado"></span></p></div></div></div></div></div></div><hr><div class="row"><div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><button type="submit" id="form-envia" class="pino">Continuar</button></div></div></div></div><div class="form-group field-primeiropasso-latitude"><input type="hidden" id="primeiropasso-latitude" class="form-control" name="PrimeiroPasso[latitude]"><p class="help-block help-block-error"></p></div> <div class="form-group field-primeiropasso-longitude"><input type="hidden" id="primeiropasso-longitude" class="form-control" name="PrimeiroPasso[longitude]"><p class="help-block help-block-error"></p></div> </form>



<center>
 	<hr class="bujon"></hr></center>
	</div><!-- perimiro form-->

	<br><br>