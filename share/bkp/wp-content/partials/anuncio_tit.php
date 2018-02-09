
<?php

$id = isprodit_id($ildo);


$buda = sel_simples("anuncios", "*", "where um = '$id'");


$bunf = mysql_fetch_array($buda);

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


?>


<div class="suspend">

<div class="encaixa">


<h1><?php echo $modelo. ' - ' .$bairro. "</h1>"; ?>


</div><!--encaixa-->

</div><!--muko-->