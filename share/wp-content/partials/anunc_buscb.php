<div class='regua'>

<div class='encaixa'>


<div class='esq_f cinquent'>

<h2>Veículos encontrados</h2>


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




echo "<a href='$ponto"."anuncios/$link' alt='$modelo $bairro' title='$modelo $bairo em $cidade' class='' style='width:33%; min-width: 33%; margin: auto; display: inline-table;'>".'

<div class="col-md-3 team-member-box radius" style="width: 100%;">
										<div class="team-member border-bottom-hover radius" >
											<div class="member-pic" >





'."<img src='$ponto".img_princ($id)."' alt='$modelo $bairro'  title='$modelo $bairo em $cidade' class='radius fadeImg'>	".'		</div><!-- .member-pic -->

																						
																					</div><!-- .team-member -->
									




<table border="0" padding="1"><tr>'."<td style='font-size:15px;' class='vendan'>


<span style='padding-top-top: 7px; position: relative'><b>$modelo</b></span>


<br> <span style='padding-top: -6px;'>$nome</span><br>

<span class='tuno' style='margin-top: 8px;'>

<img src='$ponto"."imagens/localizacao aluguel compartilhar carro.png' style='margin-top: 8px;'>  - $bairro



</span>
</td></tr><tr><td>
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

</div>








</div>

<div class=='dir_f cinquent'>


<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1875.405486874302!2d-43.93478747198775!3d-19.93236888625867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa690a165324289%3A0x701d1dc8bb05fd7d!2sBelo+Horizonte+-+MG!5e0!3m2!1spt-BR!2sbr!4v1516364211006" width="510" height="850" frameborder="0" style="border:0" allowfullscreen></iframe>

</div>




</div>




</div>