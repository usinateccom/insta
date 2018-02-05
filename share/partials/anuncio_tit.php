
<?php

$id = isprodit_id($ildo);


$buda = sel_simples("anuncios", "*", "where um = '$id'");


$bunf = mysql_fetch_array($buda);

$id = $bunf["um"];

$id_anuncio = $id;

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


?>


<div class="suspend" style="position: absolute; top: 60px; width: 100%; color: #fff;">

<div class="encaixa dalo">


<h1 style="font-family: 'Montserrat', sans-serif!important;"><?php echo $modelo. ' - ' .$bairro. "</h1>"; 
echo "<span style='margin-top: -40px; display: table; line-height: 70px;'>


<img src='$ponto".img_user($idusr)."'  alt='$modelo $bairro' title='$modelo $bairo em $cidade' class='rolico fadeImg' style='margin-top:40px; width: 65px; display:inline; float:left'>


<a href='#' style='color: #fff; font-weight:bold; display: inline; float: left; margin-left: 15px; margin-top:38px;' class='fadeIn'><h3> - $nome</h3></a>


  </span>";
?>
<br><br><br><br>
<br><Br>

	<h3 style='margin-top: 240px; text-shadow: 1px 1px #000;'>Sobre o veículo:</h3>

	<p style="text-shadow: 1px 1px #000;">Air bag, Alarme, Ar condicionado, Ar quente, Desembaçador traseiro, Direção hidráulica, Freios ABS, Limpador traseiro, Retrovisores elétricos, Travas elétricas, Vidros elétricos, Tração 4x4 com Reduzida. Rádio, CD Player e entrada para USB.</p>

<style>

.dalo a:hover{text-decoration: none!important;}

</style>

</div><!--encaixa-->

</div><!--muko-->