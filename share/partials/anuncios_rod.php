<div class='regua'>
<iframe class='dnone' src='../../funcoes/masco.php?pagina=principal'></iframe>

<?php 

$latid = frinha("markers", 'lat', 'type', $id_anunc);
$longid = frinha("markers", 'lng', 'type', $id_anunc);

$coordenadas = $latid.",".$longid;

?>
<iframe src="../../mapas_https/frame_anuncio.php?anuncio=<?php echo $id_anunc."&coordenadas=$coordenadas"; ?>" class='fadeIn' style="width: 100%; height: 450px; border:0px;"></iframe>



</div>


	

				<!-- SECTION HEADER -->
									<div class="section-header">

						<h2 class="dark-text">Avaliações</h2>

						<div class="colored-line"></div>

					


							</div>


<div class="regua">

	<center>Nenhuma avaliação para este veículo</center>
<br><br><br>
</div>

<div class="regua">

<div class="central">

<h2>Veículos Similares</h2>
<div class="colored-line"></div>
<br><br>

</div>

	<?php




$buda = sel_simples("anuncios", "*", "where um <> '$id' order by rand() limit 3");



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

<div class="col-md-3 team-member-box radius" style="width: 100%; 6">
										<div class="team-member border-bottom-hover radius" >
											<div class="member-pic" >





'."<img src='$ponto".img_princ($id)."' alt='$modelo $bairro'  title='$modelo $bairo em $cidade' class='radius fadeImg' style='z-index: 9996'>	".'		</div><!-- .member-pic -->

																						
																					</div><!-- .team-member -->
									


<table border="0" padding="1" style="margin-top: -30px; z-index:9997;"><tr><td width="80">'."<img src='$ponto".img_user($idusr)."'  alt='$modelo $bairro' title='$modelo $bairo em $cidade' class='rolico fadeImg'> 
</td><td style='font-size:15px;' class='vendan'>


<span style='padding-top-top: 7px; position: relative'><b>$modelo</b></span>


<br> <span style='padding-top: -6px; z-index:9997'>$nome</span><br>


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

	</div>