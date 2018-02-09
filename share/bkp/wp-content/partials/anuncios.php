<div class="encaixa">

<div class="central">

<h2>Veículos Próximos</h2><h3 class='rukio'>Ative a localização de seu dispositivo para melhor seleção</h3>

</div>
<div class="regua central"><center>
<div style="width: 120px; margin-bottom: 40px; color:#ff5500;">
_____
</div>
</center>
</div>

<div class="regua central">
<center>
<?php 


$buda = sel_simples("anuncios", "*", "order by rand() limit 6");



while($bunf = mysql_fetch_array($buda)){

$id = $bunf["um"];

$modelo = $bunf["modelo"];



$bairro = guina("bairros_ff", $bunf["bairro"], "idBairro", "bairro" );

$cidade = guina("cidades_ff", $bunf["cidade"], "idCidade", "cidade" );

$idzinho = xinka($id);

$modelon  = str_replace(" ", "-", $modelo);

$modelon  = str_replace("%20", "-", $modelo);

$link = formlink("$modelon-$bairro-$idzinho/");

$preco = $bunf["preco"];

$idusr = $bunf["propiet"];

$nome = guina("dados_usr", $idusr, "id_tab_p", "nome");




echo "<a href='anuncios/$link' alt='$modelo $bairro' title='$modelo $bairo em $cidade' class='' style='width:33%; min-width: 33%; margin: auto; display: inline-table;'>".'

<div class="col-md-3 team-member-box radius" style="width: 100%;">
										<div class="team-member border-bottom-hover radius" >
											<div class="member-pic" >





'."<img src='$ponto".img_princ($id)."' alt='$modelo $bairro'  title='$modelo $bairo em $cidade' class='radius fadeImg'>	".'		</div><!-- .member-pic -->

																						<div class="member-details radius">
												<div class="member-details-inner">
																										
																											<div class="small-text" style="padding-top: 80px;">
															<b>Clique para obter mais informações.</b>
														</div>

																									</div><!-- .member-details-inner -->
											</div><!-- .member-details -->
																					</div><!-- .team-member -->
									




<table border="0" padding="1"><tr><td width="80">'."<img src='$ponto".img_user($idusr)."'  alt='$modelo $bairro' title='$modelo $bairo em $cidade' class='rolico fadeImg'> 
</td><td style='font-size:15px;' class='vendan'>


<span style='padding-top-top: 7px; position: relative'><b>$modelo</b></span>


<br> <span style='padding-top: -6px;'>$nome</span><br>

<span class='tuno' style='margin-top: 8px;'>

<img src='imagens/localizacao aluguel compartilhar carro.png' style='margin-top: 8px;'>  - $bairro



</span>
</td><td width='100'>
<div class='bira central pacon' style='line-heght 16px;'>

<span class='pinivim'>R$</span>
<span class='pinalva'>$preco,00</span><span class='pinivo'>/Dia</span>

</div><br>

	</td>



</tr></table>

	</div><!-- .team-member -->   
</a>";

}

 ?>

</center>

<div class="regua central">
<br><br>
<center>

<a href="anuncios/" title="<?php echo $tit_u; ?> - Anúncios" alt="<?php echo $alt_u; ?>" class="anuncio_bloco">

VER TODOS

</a>
</center>

</center>

</div></div>




<div class="encaixa">
	
	<hr class="bujo"></hr>
</div>