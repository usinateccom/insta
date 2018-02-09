<div class='regua' style="background-image: url('<?php echo $ponto.img_princ($id); ?>'); background-size: 100% ; height: 730px;">

</div>
<div class='regua'>


<div class='encaixa'>



<div class="sesap esq_f">














<h3>Características:</h3>

<table border="0" padding='8' width="712" style="width: 712px;"><tr><td wvalign="top" style="" width="50%">
<ul><li>
ABS </li><li>USB</li><li>Vidros Elétricos</li><li>Direção Hidráulica</li></lu>

</td><td valign="top">


<ul><li>Ar Condicionado</li><li>Alarme</li><li>Air Bag</li><li>Bluetooth</li></ul>



</td></tr></table>
<h3>Seguro e Cobertura:</h3>

<table border="0" padding='8' width="712" style="width: 712px;"><tr><td wvalign="top" style="" width="50%">

<ul><li>
Colisão, Incêndio, Roubo e Furto</li><li>Assistência 24 horas</li><li>Acidentes Pessoais por Ocupante</li>
<li>Danos Materiais e Corporais</li></ul>


</td><td valign="top">

<ul><li>
Danos Morais</li><li>
Danos Estéticos</li><li>
Franquia: R$ 3.000,00 
</li></ul>


</td></tr></table>







</div><!--1-->

<div class="trint dir_f">

<div class="testimonials-box" style="margin-top: 50px;">
<div class="feedback border-bottom-hover">
<div class="pic-container" style="width: 200px;">

<div class='bira central pacon' style="line-height: 16px; margin-top:15px; margin-left: 50px;">
<center><br>
<span class='pinivim'>R$</span>
<span class='pinalva'><?php echo $preco; ?>,00</span><span class='pinivo'>/Dia</span>
</center><br>
</div>



</div>
<div class="feedback-text-wrap" style="font-size: 12px;">
Selecione as datas de retirada e devolução para visualizar o preço total.<br><br>



<span class="central" style="width: 20px;">

De
</span>


<input class="busu "  placeholder="00/00/0000"  id="data_init" type="text" value="<?php echo date('d/m/Y'); ?>"  style='width: 80px'/>
&nbsp;
<input class="busu " name="pickup_time" placeholder="00:00" type="text" id="hora_init" value="<?php echo date('H:i'); ?>" style='width: 50px' /><br>



<br>

<span class="central" style="width: 20px;">
Até


</span>
<input class="busu " name="return_date" placeholder="00/00/0000"  id="data_end"  type="text" value="" style="width: 80px;"/>
&nbsp;
<input class="busu " name="return_time" placeholder="00:00" id="hora_end" type="text" value="" style='width: 50px;'/>

<center>

	<div class="" id='bambolen' style="color: #ff5500; font-size: 23px; padding: 6px;"></div>

	<button class="pino" id="botao_solic" disabled> Solicitar</button>

	<div class="vermelho" id='bambole'></div>

</center>

<script>

$("#botao_solic").click(function(){


$("#bambole").html("");


var dai = $("#data_init").val(), daen = $("#data_end").val(), hoin = $("#hora_init").val(), hoend = $("#hora_end").val();

//alert(dai);

if((dai == "") || (daen == "") || (hoin == "") || (hoend == "")){

$("#bambole").html("Preencha todos os campos.");
}

if((dai != "") && (daen != "") && (hoin != "") && (hoend != "")){

$("#bambole").html("Aguarde...");


// json



} // 

});

$("#hora_end").blur(function(){

	$("#bambole").html("");

var dai = $("#data_init").val(), daen = $("#data_end").val(), hoin = $("#hora_init").val(), hoend = $("#hora_end").val();

if((dai == "") || (daen == "") || (hoin == "") || (hoend == "")){

$("#bambole").html("Preencha todos os campos.");

}

if((dai != "") && (daen != "") && (hoin != "") && (hoend != "")){

$("#bambole").html("Aguarde...");


//alert("<?php echo $id_anunc.':::'.$usuario.':::'; ?>"+dai+":::"+daen+":::"+hoin+":::"+hoend);

    $.getJSON("../../funcoes/calc_valor.php",
    {bingo: "<?php echo $id_anunc.':::'.$usuario.':::'; ?>"+dai+":::"+daen+":::"+hoin+":::"+hoend},

    function(json){

$("#bambolen").html(json.campo);

$("#bambole").html("Solicite!");

$("#botao_solic").prop('disabled', false);
//retorna calculo

    });

} // fim da funcao

});
</script>

<style>
#botao_solic:disabled, button[disabled]{background-color: #eee;}
#banbolen{color: #ff5500; font-size: 23px; padding: 6px;}

</style>


</div>


</div>



</div>

</div>



</div><!--1-->




</div>





<style>

.picpov{width: 8%; margin: 1%; display: inline; border: 1px solid #666; cursor: pointer;}
.princ_imgg{width: 900px; border: 1px solid #666; height: 600px;}
.encaixab{width: 900px; display: table;}
</style>
<div class="encaixa">
<hr class="bujo"></hr></div>



<div class="encaixa">
<h3 style="margin-left: 80px; margin-top: -10px;">Fotos</h3>

</div>

<center>
<div class="encaixab">
<div class="regua">

<?php



$fork = sel_simples("fotos_gal", "*", "where id_anunc='$id_anuncio' limit 10;");

$bino = mysql_num_rows($fork);

if($bino > 0){

$cont = 1;

$filu = "";

$princ = "";

while($jok = mysql_fetch_array($fork)){

$filu = $filu."<img src='".$ponto."imagens/anuncio/".$jok["fotosss"]."' class='picpov' title='$tit_u' alt='$alt_u'>";


if($cont == 1){

$princ = "<img src='".$ponto."imagens/anuncio/".$jok["fotosss"]."' class='princ_imgg' id='sului' title='$tit_u' alt='$alt_u'>";

}

$cont +=1;


} // while

echo $filu."</div><div class='encaixab'>".$princ."<br><br>";

}else{


echo "<center>NENHUMA IMAGEM CADASTRADA PARA ESTE ANÚNCIO</center><br><br>";


}



?>



	</div></div></center>


<script>

	$(".picpov").click(function(){

//
var nil = $(this).attr("src");

//alert(nil);


$("#sului").attr("src", nil);

	});


</script>

<?php



//include "partials_n/funcoes_checkout_afins.php";



?>