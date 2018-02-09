<div class="encaixa"><br><br>
							<h2 class="text-left dark-text">Avaliação do Mês - <?php echo date('m/y') ;?></h2><div class="colored-line-left"></div>
						<div class="regua"><div class='sescinc esq_f'>




                            <img src="imagens/avaliacao aluguel carro.png" style="width: 60px; height:auto;"><br /><br />
"<?php $darlan = date('m/y'); $fmj = sel_simples("avaliander", "*", "where paro_meseano = '$darlan' limit 1"); 


$jjj = mysql_fetch_array($fmj);

$dddd = $jjj["id_usr"];
echo $jjj['avaliand'];

$ciddd = $jjj['cidade'];

$nomejj = guina("dados_usr", $dddd, "id_tab_p", "nome");

 ?>"<br /><br /> <?php echo $nomejj; ?> - <?php echo frinha("cidades_ff", 'cidade', 'idCidade', $ciddd); ?>


</div>

<div class="trint dir_f central">

<img src="<?php echo $ponto.img_user($dddd); ?>" class="rolicon fadeImg" title="<?php echo $tit_u; ?>" alt="<?php echo $alt_u; ?>">
</div>



</div><br>
</div></div>
<div class="encaixa">
	<br><br>
	<hr class="bujo"></hr>
</div>
