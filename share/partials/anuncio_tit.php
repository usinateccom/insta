
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

$anovv = $bunf['ano_f'];

$nome = guina("dados_usr", $idusr, "id_tab_p", "nome");

$useron = get_usr($idzinho);

$nomecomp  = guina("us_nome_mail", $idusr, "is_id", "nome" );

?>


<div class="suspend" style="position: absolute; top: 60px; width: 100%; color: #fff;">

<div class="encaixa dalo">

<div class="tuta fadeIn" style="margin-top: 50px;">



<h1 style="font-family: 'Montserrat', sans-serif!important; margin-top: -5px;"><?php echo $modelo. ' - ' .$bairro. "</h1><h2 style='margin-top:-15px; text-shadow:1px 1px #666'>$cidade</h2>"; 
echo "

<div style='float:right; margin-right: 230px; margin-top: -36px; text-shadow: 1px 1px #000; font-weight: bold;'>
Ano $anovv
</div>

<span style='margin-top: -40px; display: table; line-height: 70px;'>


<img src='$ponto".img_user($idusr)."'  alt='$modelo $bairro' title='$modelo $bairo em $cidade' class='rolico fadeImg' style='margin-top:40px; width: 65px; display:inline; float:left'>


<a href='../../membros/$useron' style='color: #fff; font-weight:bold; display: inline; float: left; margin-left: 15px; margin-top:38px;' class='fadeIn'><h3 style='text-shadow:1px 1px #000;'> - $nome</h3></a>


  </span>
  ";
?>


<span style="float: right; display: inline-table;">
	
<table border='0' cellspacing="0" cellpadding="0" class="central" style="border: 1px solid transparent; font-size: 11px; width: 300px; margin-top: -80px; text-shadow: 1px 1px #000;"><tr  style="border: 0px;"><td style="border: 0px;">
<img src="../../imagens/anuncio/permitido-viagem.png">
</td><td style="border: 0px;">
<img src="../../imagens/anuncio/permitido-animais.png">
</td><td  style="border: 0px;">

<img src="../../imagens/anuncio/levo-ate-voce.png">
</td>
</tr><tr>
</td><td style="border: 0px;">
Permite Viagem
	</td><td style="border: 0px;">
Permite Animais
		</td><td style="border: 0px;">
Levo até Você
</td></tr></table>

</span>


</div>



</div>
<style>
table td th{border:0px;}
</style>
<br><br><br><br>
<br><br>
<div class="regua marca" style="position: absolute;  margin-top: 140px;">
	<div class="encaixa">
	<h3 style='text-shadow: 1px 1px #000;'>Sobre o veículo:</h3>

	<p style="text-shadow: 1px 1px #000;">


<?php

$fako = sel_simples("descric_anunc", "*", "where id_anunc = '$id_anunc'");

$ric = mysql_fetch_array($fako);

echo $ric["sobre"];

?>


	</p>

</div>

</div>
<style>

.dalo a:hover{text-decoration: none!important;}

</style>

</div><!--encaixa-->

</div><!--muko-->