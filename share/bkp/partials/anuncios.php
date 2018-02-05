<div class="encaixa">

<div class="central">

<h2>Veículos Próximos</h2>

</div>
<div class="regua central"><center>
<div style="width: 120px; margin-bottom: 40px; color:#CB9E00;">
_____
</div>
</center>
</div>

<div class="regua central">
<center>
<?php 


$buda = sel_simples("anuncios", "*", "order by rand()");



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




echo "<a href='$link' alt='$modelo $bairro' title='$modelo $bairo em $cidade'>".'

<div class="col-md-3 team-member-box">
										<div class="team-member border-bottom-hover">
											<div class="member-pic">





'."<img src='$ponto".img_princ($id)."' alt='$modelo $bairro'  title='$modelo $bairo em $cidade'>	".'		</div><!-- .member-pic -->

																						<div class="member-details">
												<div class="member-details-inner">
																											<h5 class="colored-text">'."R$ $preco,00 / Dia	".'</h5>
																											<div class="small-text" style="padding-top: 30px;">
															<b>Clique para obter mais informações.</b>
														</div>

																									</div><!-- .member-details-inner -->
											</div><!-- .member-details -->
																					</div><!-- .team-member -->
									




<span>'."<img src='$ponto".img_user($idusr)."'  alt='$modelo $bairro' title='$modelo $bairo em $cidade' class='rolico fadeImg'> 
</span><span>


<b>$modelo


<br> $nome</b><br>

</span><span>
<div class='bira central'>


R$ $preco,00/Dia

</div>
<center>
<img src='imagens/localizacao aluguel compartilhar carro.png'> <span class='tuno'> - $bairro</span></center>
	</td>



</span>

	</div><!-- .team-member -->   
</a>";

}

 ?>

</center>

</div></div>