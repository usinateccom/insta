<div class="encaixa">





<?php
echo $idzinho;

$status_cad = frinha("cadcomp", "status", 'id_usr', $idzinho);

//echo $status_cad;
//echo $idzinho;
if($status_cad == '1'){

echo "<center><br><div class='avisoni reguad central'>


<b> $nome_l,</a> Seu cadastro está incompleto! <a href='../completar-cadastro/' title='$tit_u'><b>Clique aqui</b></a> para atualizar seus dados!<br>A atualização dos dados é necessária para compartilhar e contratar veículos compartilhados.

</div><br></center>";

}else{


echo "<center><br><div class='avisonin reguad central'>
</div>
<br></center>";


}





?>
<div class="regua central">
	
<div class="vintcinc">
<h4>Meus Anuncios</h4>

<br> 00 Anuncios

</div>


<div class="vintcinc">
<h4>Meus dados</h4>

<br> <a href="#" onclick="completa_dados()">Complete seus dados</a>

</div>


<div class="vintcinc">
<h4>Minhas Negociações</h4>

<br> 00 Negociações

</div>

<div class="vintcinc">
<h4>Favoritos</h4>

<br> 00 Favoritos

</div>



</div>




<div class="regua central">


<div class="vintcinc">
<h4>Minhas atividades</h4>

<br> <a href="#" onclick="conf_ativ()">Conf. Ativ. Gerais</a>

</div>



<div class="vintcinc">
<h4>Minhas Avaliações</h4>

<br> 00 Avaliações

</div>



<div class="vintcinc">
<h4>Meus Feedbacks</h4>

<br> 00 Feedbacks

</div>



<div class="vintcinc">
<h4>Histórico</h4>

<br> 00 Contratações

</div>



</div>


<div class="regua central">

<div class="vintcinc">
<h4>Configurações</h4>

<br> <a href="#" onclick="lista_pref()">Preferências</a>

</div>

<div class="vintcinc">
<h4>Suporte</h4>

<br> 00 Tickets

</div>


<div class="vintcinc">
<h4>Mensagens</h4>

<br> 00 Mensagens

</div>

<?php

include "partials/dados_painel.php";


?>

</div>


</div>