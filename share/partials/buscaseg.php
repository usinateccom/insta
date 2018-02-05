



<div style="<?php marcad($ponto); ?> padding-top: 60px; height: 300px; background-size: 100% auto;" class="fadeIn">


<style>

#ginjug ul li{display: inline-table; float: left;}

</style>

<div class="encaixa" style='' id='ginjug'>

<h1 style="color: #fff; text-shadow: 1px 1px #000; ">Encontre seu veículo</h1>




<center>
<ul class="" style="display:table;">



<li style="padding-top:10px;">


Em&nbsp</li>

<li style="width: 800px;">


	<input class="bus"  id='busca_rua' placeholder="Bairro, rua, etc..." type="text" value=""  style=" background-image:url(imagens/locacao%20carros%20compartilhamento%20fundo%20buscad.jpg); border-bottom: 2px solid #fff; color: #fff;  margin-left: 15px; width: 800px!important; border-bottom-left: 1px solid #fff; border-bottom-right: 1px solid #fff; border-radius: 6px;"/></li><style> #busca_rua{width: 800px!important}</style>

<li style="padding-top:10px;" class="dnone"> &nbsp;De&nbsp</li><li class="dnone">



<input class="bus dimin"  placeholder="00/00/0000"  id="data_init" type="text" value="<?php echo date('d/m/Y'); ?>"  /></li><li style="" class="dnone">
&nbsp;
<input class="bus dimin" name="pickup_time" placeholder="00:00" type="text" id="hora_init" value="<?php echo date('H:i'); ?>" /></li><li class="dnone" style="padding-top:10px;">
&nbsp;Até</li><li style="" class="dnone">

&nbsp;
<input class="bus dimin" name="return_date" placeholder="00/00/0000"  id="data_end"  type="text" value="" /></li><li style="" class="dnone">

&nbsp;
<input class="bus dimin" name="return_time" placeholder="00:00" id="hora_end" type="text" value="" /></li>


<li> &nbsp;&nbsp;&nbsp;<button class="pino" id="botao_busca" style="margin-top: 6px"> Buscar</button>







</li></ul></center>






<div class="reguad" style="color: #fff; text-shadow: 1px 1px #000;">



<span> Você está em: </span><span id="nome_geog">... </span><span><img src="<?php echo $ponto; ?>imagens/carro compartilhadolocalizacao.png" style="height: 20px; width: auto; cursor: pointer;" onclick="initializeo()" ></span><span id="regra_geog" style="font-size: 12px">  - Clique na imagem ao lado para obter sua localização.</span>

<br>
<div class="f_dir"><button class='pinoni' id='filtrons' style="float: right; margin-top:-40px">Adicionar filtros</button>





</div>


<div class="encaixa" style='display: none;'>
<form class="dnone" id="fominho" method="post" action="<?php echo $ponto; ?>busca/"><input type="text" name="busca_pulo" id="busca_pulo"></form>


<?php

include "includes/prabusca.php";

?>


</div>



<script>

$("#filtrons").click(function(){

alert('testefiltros');

$("#buscafilt").removeClass("dnone");

$( "#buscafilt" ).slideDown( "slow");


});
</script>


<div class="encaixa dnone" id="buscafilt">

	<span style="height: 60px; display: inline-table; float: left; margin-left: 30px;">
Tipo<br>
<select class="bus" id="tipo_buss" style="color: #000">
	
<option value = 'Buggy'>BUGGY</option>

<option value='Conversível'> CONVERSÍVEL</option>
<option value='Sedan'>SEDAN</option>

<option value="Van">VAN</option>
<option value="Picape">PICAPE</option>

</select>

	</span>




	<span style="height: 60px; display: inline-table; float: left; margin-left: 30px;">
Delivery<br>
<select class="bus" id="der_buss"  style="color: #000">
	<option value="Não">NÃO</option>

<option value="Sim">SIM</option>


</select>

	</span>



	<span style="height: 60px; display: inline-table; float: left; margin-left: 30px;">
Combustível<br>
<select class="bus" id="bom_buss"  style="color: #000">
	<option value="Gasolina">GASOLINA</option>

<option value="Álcool">ALCOOL</option>

<option value="Diesel">DIESEL</option>

<option value="Flex">FLEX</option>



</select>

	</span>




	<span style="height: 60px; display: inline-table; float: left; margin-left: 30px;">
Câmbio<br>
<select class="bus" id="camb_buss"  style="color: #000">
	<option value="A">AUTOMÁTICO</option>

<option value="C">MANUAL</option>


</select>

	</span>

<span style="height: 60px; display: inline-table; float: right; margin-right: 60px; padding-top: 7px;">
<button class="pino" id="botao_buscaf"> Buscar c/ Filtros</button>

</div>


</div>



<div class='regua' id='xananim' class="dnone">


</div><!--xananim-->






</div><!--muko-->

<script>

$("#botao_buscaf").click(function(){





var busca_rua = $("#busca_rua").val(), data_init = $("#data_init").val(), hora_init = $("#hora_init").val(), data_end = $("#data_end").val(), hora_end = $("#hora_end").val(), tipo_bus = $("#tipo_buss").val(), der_buss = $("#der_buss").val(), bom_bus = $("#bom_bus").val(), camb_buss = $("#camb_buss").val();


if(busca_rua == ""){


	var busca_rua = '-';
}


if(data_init == ""){


	var data_init = '-';
}

if(hora_init == ""){


	var hora_init = '-';
}

if(data_end == ""){


	var data_end = '-';
}

if(hora_end == ""){


	var hora_end = '-';
}



$("#busca_pulo").val(busca_rua + '|||' + data_init + '|||' + hora_init + '|||' + data_end + '|||' + hora_end + '|||' +  tipo_bus + '|||' + der_buss + '|||' + bom_bus + '|||' + camb_buss);

var tuton = $("#busca_pulo").val();



$("#fominho").submit();


});

</script>