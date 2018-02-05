



<div id="muko">

<div class="encaixa">

<h2>Encontre seu Veículo</h2>
<ul class="" style="display:table;">



<li style="padding-top:10px;">


Em&nbsp</li>

<li><input class="bus"  id='busca_rua' placeholder="Bairro, rua, etc..." type="text" value=""  sytle=" border-bottom: 2px solid #fff; color: #fff;"/></li>

<li style="padding-top:10px;"> &nbsp;De&nbsp</li><li>



<input class="bus dimin"  placeholder="00/00/0000"  id="data_init" type="text" value="<?php echo date('d/m/Y'); ?>"  /></li><li style="">
&nbsp;
<input class="bus dimin" name="pickup_time" placeholder="00:00" type="text" id="hora_init" value="<?php echo date('H:i'); ?>" /></li><li style="padding-top:10px;">
&nbsp;Até</li><li style="">

&nbsp;
<input class="bus dimin" name="return_date" placeholder="00/00/0000"  id="data_end"  type="text" value="" /></li><li style="">

&nbsp;
<input class="bus dimin" name="return_time" placeholder="00:00" id="hora_end" type="text" value="" /></li>


<li> &nbsp;&nbsp;&nbsp;<button class="pino" id="botao_busca"> Buscar</button>







</li></ul><form class="dnone" id="fominho" method="post" action="<?php echo $ponto; ?>busca/"><input type="text" name="busca_pulo" id="busca_pulo"></form>


<?php

include "includes/prabusca.php";

?>




<div class="reguad">


<span> Você está em: </span><span id="nome_geog">... </span>  

<br>
<div class="f_dir"><button class='pinoni' id='filtrons' style="float: right; margin-top:-30px">Adicionar filtros</button>


<script>

$("#filtrons").click(function(){

$("#buscafilt").removeClass("dnone");


});
</script>
</div>

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




</div><!--encaixa-->

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