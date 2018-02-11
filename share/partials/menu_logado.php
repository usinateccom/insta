


<nav class="menu">
<ul>

<li><a href="https://www.instashare.me/" title="<?php echo $tit_u; ?>" alt="<?php echo $alt_u; ?>" class="<?php if($pagina == "principal"){

echo "selecionado";	
	
}else{
	
	echo "link_menu";
	
}?>">

HOME

</a></li>





<li><a href="<?php echo $ponto; ?>cadastro-veiculo/" title="<?php echo $tit_u; ?>" alt="<?php echo $alt_u; ?>" class="<?php if($pagina == "cadastro-veiculo/"){

echo "selecionado";	
	
}else{
	
	echo "link_menu";
	
}?>">

CADASTRE SEU VEÍCULO

</a></li>



<li><a href="<?php echo $ponto; ?>como-funciona/" title="<?php echo $tit_u; ?>" alt="<?php echo $alt_u; ?>" class="<?php if($pagina == "como-funciona/"){

echo "selecionado";	
	
}else{
	
	echo "link_menu";
	
}?>">

COMO FUNCIONA

</a></li>


<li><a href="<?php echo $ponto; ?>painel/" title="<?php echo $tit_u; ?>" alt="<?php echo $alt_u; ?>" class="<?php if($pagina == "painel/"){

echo "selecionado";	
	
}else{
	
	echo "link_menu";
	
}?>">

PAINEL

</a></li>







<li>
<a href='#' onclick="logoutp()" class="link_menu">SAIR</a>


</li>

<li>
	
<?php

echo $foto_l;

?>






</li>


</ul>
</nav>

