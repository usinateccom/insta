<div class="encaixa" style="margin-top: -120px;">





<?php
//echo $idzinho;

$status_cad = frinha("cadcomp", "status", 'id_usr', $idzinho);

//echo $status_cad;
//echo $idzinho;
if($status_cad == '1'){

echo "<center><br>


<div class='avisoni reguad central'>


<b> $nome_l,</a> Seu cadastro está incompleto! <a href='../completar-cadastro/' title='$tit_u'><b>Clique aqui</b></a> para atualizar seus dados!<br>A atualização dos dados é necessária para compartilhar e contratar veículos compartilhados.

</div><br></center>";

}else{


echo "<center><br>


<div class='avisonnin reguad' style=' width:100%; margin-top: -200px;'>


<img src='$ponto".img_user($idzinho)."' ".'class="roliconi fadeImg" title="<?php echo $tit_u; ?>" alt="<?php echo $alt_u; ?>">'."


</div>


<br></center>";


}





?></div>
<style>
.prepo{box-shadow: 1px 1px #000; color: #fff!important;}
.prepo a{box-shadow: 1px 1px #000; color: #fff!important;}
.prepo a:link{box-shadow: 1px 1px #000; color: #fff!important;}
.prepo h3 h4{font-weight: bolder;}
</style>

<div class="regua central" style="margin-top: 35px; background-image: url(<?php echo $ponto; ?>imagens/locacao%20carros%20compartilhamento%20fundobv.jpg); background-size: 100% 100%; text-shadow: 1px 1px #000;">

<div class="encaixa">
<div class="regua central">
	
<div class="vintcinc prepo">
<h4>Meus Anuncios</h4>

<br> 00 Anuncios<br>00 Anúncios Validados<br>00 Anúncios incompletos 

</div>


<div class="vintcinc prepo">
<h4>Meus dados</h4>
<?php

if($status_cad == '1'){

	echo '
<br> <a href="#" onclick="completa_dados()">Complete seus dados</a>
<br> <a href="../editar-dados/">Edite seus dados</a><br><br>';}

else{

echo '<br> <a href="../editar-dados/">Edite seus dados</a><br><br><br>';

}
?>
</div>


<div class="vintcinc prepo">
<h4>Minhas Negociações</h4>

<br> 00 Negociações<br>00 Negoc. concretizadas <br> 00 Negoc. pendentes

</div>

<div class="vintcinc prepo">
<h4>Favoritos</h4>

<br> 00 Favoritos<br><br><br>

</div>



</div>




<div class="regua central">


<div class="vintcinc prepo">
<h4>Minhas atividades</h4>

<br> <a href="#" onclick="conf_ativ()">Conf. Ativ. Gerais</a>

</div>



<div class="vintcinc prepo">
<h4>Minhas Avaliações</h4>

<br> 00 Avaliações

</div>



<div class="vintcinc prepo">
<h4>Meus Feedbacks</h4>

<br> 00 Feedbacks

</div>



<div class="vintcinc prepo">
<h4>Histórico</h4>

<br> 00 Contratações

</div>



</div>


<div class="regua central">

<div class="vintcinc prepo">
<h4>Configurações</h4>

<br> <a href="#" onclick="lista_pref()">Preferências</a>

</div>

<div class="vintcinc prepo">
<h4>Suporte</h4>

<br> 00 Tickets

</div>


<div class="vintcinc prepo">
<h4>Mensagens</h4>

<br> 00 Mensagens

</div>

<?php

//include "partials/dados_painel.php";


?>

</div>


</div>