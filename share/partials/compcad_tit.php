
<?php

if($logado!= 'sim'){

echo "<script> window.location.href='http://www.instashare.me/'; </script>";

}

$usuario_nom = get_usr($idzinho);
reglog("ACESSO", "USUÁRIO $usuario_nom ACESSOU A ÁREA PARA COMPLETAR O CADASTRO", $usuario_nom);


?>

<div style="<?php marcad($ponto); ?> padding-top: 60px; height: 630px;" class="fadeIn">


<div class="encaixa">

<h1 style="color:#fff;font-family: 'Montserrat', sans-serif!important;"><?php echo $nome_l; ?>, complete seu cadastro no Instashare</h2><br>



</div><!--encaixa-->

</div><!--muko-->