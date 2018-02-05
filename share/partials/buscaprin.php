



<div id="muko" style="font-family: 'Montserrat', sans-serif; background-image:url(imagens/compartilhamento%20carros%20cumprimento.jpg); background-size:  100% auto; text-shadow: 1px 1px #000;">

<div class="encaixa" style="">

<br>
	<center><h2 style="text-shadow: 1px 1px #000; font-family: 'Montserrat', sans-serif;">Compartilhe seu veículo - Veja quanto você pode ganhar</h2><br><br>
<div class="slidecontainer">
  <input type="range" min="1" max="30" value="15" class="slider" id="myRange" style="width:600px;">
</div><br><br>

<div class="regua central">

<span>Compartilhado seu veículo por até </span><span id="diasf" style="font-weight: bold">15</span><span> dias:</span>

</div>

<style>
.cal_car{font-size:26px; font-weight:bold; color: #fff;}
.ttj{width: 30%; display: inline-table; margin: auto;}

</style>
<br>
<div class="regua central" style="">


<div class="ttj central">

<img src="imagens/hatch ar.jpg" class="rolico" title="<?php echo $tit_u; ?>" alt="<?php echo $alt_u; ?>" style="margin-bottom:10px;">
<br>Hatch c/ Ar Condic.<br><br>

<span class="cal_car" id="calchatch">
 R$ 810,00

</span>

</div>



<div class="ttj central">

<img src="imagens/sedan.jpg" class="rolico" title="<?php echo $tit_u; ?>" alt="<?php echo $alt_u; ?>" style="margin-bottom:10px;">
<br>Sedan Simples<br><br>

<span class="cal_car" id="calcsedan">
 R$ 1035,00

</span>

</div>

<div class="ttj central">

<img src="imagens/suvcomp.jpg" class="rolico" title="<?php echo $tit_u; ?>" alt="<?php echo $alt_u; ?>" style="margin-bottom:10px;">
<br>SUV Completo<br><br>

<span class="cal_car" id="calsuv">
 R$ 1605,00

</span>

</div>



</div>

<script>
$("#myRange").click(function(){
	
	var rang = $("#myRange").val(), hatcal = 54, sedcal = 69, calsuv = 107, suvv = rang * calsuv, sedd = rang * sedcal, hatc = rang * hatcal;
	
	$("#diasf").html(rang);
	
	$("#calchatch").html('R$ '+hatc+',00');
		$("#calcsedan").html('R$ '+sedd+',00');
	$("#calsuv").html('R$ '+suvv+',00');
	
});
</script>

<style>

.slider {
    -webkit-appearance: none;
    width: 600px;
    height: 15px;
    border-radius: 5px;   
    background: #fff;
    outline: none;
    opacity: 0.7;
    -webkit-transition: .2s;
    transition: opacity .2s;
}

.slider::-webkit-slider-thumb {
    -webkit-appearance: none;
    appearance: none;
    width: 25px;
    height: 25px;
    border-radius: 50%; 
    background: #ff5500;
    cursor: pointer;
}

.slider::-moz-range-thumb {
    width: 25px;
    height: 25px;
    border-radius: 50%;
    background: #4CAF50;
    cursor: pointer;
}

</style>


<script>
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
slider.oninput = function() {
    output.innerHTML = this.value;
}

</script><br><br>



	</center>

</div></div>



<div id="mokov" style="font-family: 'Montserrat', sans-serif; 	margin-top: -730px; margin-bottom: 530px;">

<div class="encaixa">


<h2 style="text-shadow: 1px 1px #000; font-family: 'Montserrat', sans-serif;">Encontre seu Veículo</h2><br>

<center>
<ul class="" style="display:table;">



<li style="padding-top:10px; color: #fff; text-shadow: 1px 1px solid #000;">


Em&nbsp</li>

<li style="width: 800px;">


	<input class="bus"  id='busca_rua' placeholder="Bairro, rua, etc..." type="text" value=""  style="background-color: #fff; color: #000; border-bottom: 2px solid #fff;  margin-left: 15px; width: 800px!important; border-bottom-left: 1px solid #000; border-bottom-right: 1px solid #fff; border-radius: 6px;"/></li><style> #busca_rua{width: 800px!important}</style>

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




<form class="dnone" id="fominho" method="post" action="<?php echo $ponto; ?>busca/"><input type="text" name="busca_pulo"></form>


<?php

include "includes/prabusca.php";

?>




<div class="reguad">


<span> Você está em: </span><span id="nome_geog">... </span><span><img src="<?php echo $ponto; ?>imagens/carro compartilhadolocalizacao.png" style="height: 20px; width: auto; cursor: pointer;" onclick="initializeo()" ></span><span id="regra_geog" style="font-size: 12px">  - Clique na imagem ao lado para obter sua localização.</span>

</div>

</div><!--encaixa-->

</div><!--muko-->

<script>

function initializeo(){

$("#regra_geog").html("Aguarde...");

initialize();

}

	</script>