<script src="<?php echo $ponto; ?>config/js/jquery-1.5.2.min.js"></script>
<script src="<?php echo $ponto; ?>config/js/jquery.maskedinput.js"></script>

<script>
$(document).ready(function(){
$("#data_init").mask("99/99/9999");

$("#data_end").mask("99/99/9999");

$("#hora_init").mask("99:99");

$("#hora_end").mask("99:99");
});
</script>



<div id="muko">

<div class="encaixa">

<h2>Encontre seu Veículo</h2>
<ul class="" style="display:table;">



<li style="padding-top:10px;">


Em&nbsp</li>

<li><input class="bus"  id='busca_rua' placeholder="Bairro, rua, etc..." type="text" value=""  sytle=" border-bottom: 2px solid #fff; color: #fff;"/></li>

<li style="padding-top:10px;"> &nbsp;De&nbsp</li><li style="">



<input class="bus dimin"  placeholder="00/00/0000"  type="text" value="" /></li><li style="">
&nbsp;
<input class="bus dimin" name="pickup_time" placeholder="00:00" type="text" value="" /></li><li style="padding-top:10px;">
&nbsp;Até</li><li style="">

&nbsp;
<input class="bus dimin" name="return_date" placeholder="00/00/0000"  type="text" value="" /></li><li style="">

&nbsp;
<input class="bus dimin" name="return_time" placeholder="00:00" type="text" value="" /></li>


<li> &nbsp;&nbsp;&nbsp;<button class="pino" type="submit"> Buscar</button>







</li></ul><form class="dnone" id="fominho" method="post" action="busca/"><input type="text" name="busca_pulo"></form>

<script src="config/js/pra_busca.js">



</script>


<div class="reguad">


<span> Você está em: </span><span id="nome_geog">... </span>

</div>

</div><!--encaixa-->

</div><!--muko-->