<div class="encaixa" style="margin-top: -120px;">





<?php
//echo $idzinho;
$usuario_nom = get_usr($idzinho);
reglog("ACESSO", 'USUÁRIO $usuario_nom ACESSOU A ÁREA DO USUÁRIO', $usuario_nom);

$status_cad = frinha("cadcomp", "status", 'id_usr', $idzinho);

//echo $status_cad;
//echo $idzinho;
if($status_cad == '1'){

echo "<center><br>


<div class='avisoni reguad central'>


<b> $nome_l,</a> Seu cadastro está incompleto! <a href='../completar-cadastro/' title='$tit_u'><b>Clique aqui</b></a> para atualizar seus dados!<br>A atualização dos dados é necessária para compartilhar e contratar veículos compartilhados.

</div><br></center>";

}else{

$data_cdd = frinha("usuarios_tt", "data_cad", "um", $idzinho);

$mailon = frinha("us_nome_mail", "email", "is_id", $idzinho);

$tipo_caddd = frinha("tipo_cad", "tipo", "id_usr", $idzinho);

if($tipo_caddd == 'fisica'){

	$cad_gh = "Pessoa Física";

	$beno = "Cpf:";

	$brof = "Cnh:";

$jiboia = "";

}else{
$brof = 'Regime Tributário:';
$cad_gh = "Pessoa Jurídica";
$beno = "Cnpj:";
$jiboia = "Administradores: 00";


}

echo "<center><br>


<div class='avisonnin reguad' style=' width:100%; margin-top: -200px; '>


<img src='$ponto".img_user($idzinho)."' ".'class="roliconi fadeImg" title="<?php echo $tit_u; ?>" alt="<?php echo $alt_u; ?>" style="display: inline; margin-rigth: 40px; float: left;">'."


<div style='display: inline-table; float: left; color: #fff; text-shadow: 1px 1px #000; text-align:left; margin-top: 10px; margin-left: 40px; font-size: 14px; line-height: 20px'>
Nome de Usuário: $usuario_nom <br>
Tipo de cadastro: $cad_gh <br>
Email: $mailon <br>
$beno  <br> $cad_gh <br>
$brof <br>
Endereço: <br>
            <br>
No Instashare desde: $data_cdd <br>
$jiboia
</div><!--dados-->




<div id='notifcac'>

<div class='regua'>

<img src='".$ponto."imagens/notificacao.png' ".'class="fadeImg" title="'.$tit_u.'" alt="'.$alt_u.'" style="height: 30px; width: auto; display:inline; float: left; margin-top: 18px; margin-right: 16px; margin-left: 30px;">'."


<h3 style='display:inline; float: left;'>Notificações</h3>

</div> <div class='regua central'>
<br>Nenhuma notificação recente!<br><br><br><br><br>



</div>




</div>



<br></center>";


}





?></div>
<style>


#notifcac{ pointer-events: none; font-weight: bolder;  /* isto faz com que o clique "passe" adiante */  
  min-height:60px;       /* Aqui voce define o tamanho do degrade */
 display: inline-table; float: right;
                      /* Para branco, use 255,255,255,0 e 255,255,255,1 */
background: -moz-linear-gradient(top, rgba(255,0,0,0) 0%, rgba(255,0,0,1) 100%);
  background: -webkit-linear-gradient(top, rgba(255,0,0,1) 0%,rgba(255,0,0,1) 100%);
  background: linear-gradient(to top, rgba(255,0,0,0) 0%,rgba(255,255,255,255) 100%);
                      /* Para branco, use #00ffffff e #ffffff abaixo */
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00ff0000', endColorstr='#ffff',GradientType=0 );
 border-top-right-radius: 12px; width: 300px;border-top-left-radius: 12px;
                      /* Para branco, use #00ffffff e #ffffff abaixo */

}

.prepo{box-shadow: 1px 1px #000; color: #fff!important;}
.prepo a{ color: #fff!important;}
.prepo a:link{color: #fff!important;}
.prepo h3 h4{font-weight: bolder;}
</style>

<div class="regua central" style="margin-top: 25px; background-image: url(<?php echo $ponto; ?>imagens/locacao%20carros%20compartilhamento%20fundobv.jpg); background-size: 100% 100%; text-shadow: 1px 1px #000;">

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