



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







</li></ul><form class="dnone" id="fominho" method="post" action="busca/"><input type="text" name="busca_pulo"></form>


<?php

include "includes/prabusca.php";

?>




<div class="reguad">


<span> Você está em: </span><span id="nome_geog">... </span>  


<div class="f_dir"><button class='pinoni' id='filtrons' style="float: right; margin-top:-30px">Adicionar filtros</button>



</div>

</div>



<div class='regua' id='xananim' class="dnone">


</div><!--xananim-->




</div><!--encaixa-->

</div><!--muko-->