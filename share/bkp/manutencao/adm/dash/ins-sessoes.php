<?php

include "../../../config/config.php";

include "../../../funcoes/funcoes.php";

?>
<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Sessões</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>


            <div class="row" id='canja'>
<div class="cinquent esq_f" style="width: 50%; display: inline-table;float: left;">


<div class="grifado" style="border-bottom: 1px solid #ccc; margin-bottom: 30px;">

<h2>Listas</h2>
  </div>
                <!-- /.col-lg-12 -->






<?php

$dokun = sel_simples("paginas_hj", "*", "");

while ($fon = mysql_fetch_array($dokun)) {
	# code...

$dark = $fon["urlen"];

if($dark == ""){

$dark = '-';

}

	$arraylandia = $fon["titulo"]."::".$fon["k_words"]."::".$fon["descric"]."::".$dark."::".$fon["hu"]."::".$fon["alte"].'::'.$fon["altura"].'::'.$fon["qual_e"];


echo "  **<br>";




} // while

?>

<br><br><button class='btn btn-primary' id='steie' onclick='bolachan()'>INSERIR</button>


</div><!--.esf-->


<div class="cinquent dir_f" id="cont_dir" style="width: 50%; display: inline-table;float: right;">
<dic class='reguad' id='condcim'>

</dic>


<iframe class="dnone" id="condbax">



</iframe>




</div><!--dir-->




            </div><!--canja-->


<script>

	function loa(array){


var domu = array.split("::");

//alert('foi');

var varu = "<h3> Atualizar Metas</h3><h4>Titulo</h4>  <input type='text' id='titulo' value='"+domu[0]+"' class='form-control'><h4>K-Words</h4> <input type='text' id='kword' class='form-control'  value='"+domu[1]+"'> <h4>Descrição</h4> <input type='text' id='descric' class='form-control'  value='"+domu[2]+"'> <h4>Url</h4> <input type='text' id='urle' class='form-control'  value='"+domu[3]+"'> <h4>H1</h4> <input type='text' id='hu' class='form-control'  value='"+domu[4]+"'>   <h4>AltTag</h4> <input type='text' id='alte' class='form-control'  value='"+domu[5]+"'> <h4>Nível</h4> <input type='text' id='nivel' class='form-control'  value='"+domu[6]+"'><h4>Nome da Página</h4> <input type='text' id='quale' class='form-control'  value='"+domu[7]+"'> <br><br><span> <button class='btn btn-defaut' id='cantanon'>ATUALIZAR</button></span><span id='vumora'  style='margin-left:30px;'></span>";

$("#condcim").html(varu);

$("#condbax").attr('src','partials/botao.html');

	}


function bolacha(){



var varu = "<h3> Inserir Metas</h3><h4>Titulo</h4>  <input type='text' id='titulo' value='' class='form-control'><h4>K-Words</h4> <input type='text' id='kword' class='form-control'  value=''> <h4>Descrição</h4> <input type='text' id='descric' class='form-control'  value=''> <h4>Url</h4> <input type='text' id='urle' class='form-control'  value=''> <h4>H1</h4> <input type='text' id='hu' class='form-control'  value=''>   <h4>AltTag</h4> <input type='text' id='alte' class='form-control'  value=''> <h4>Nível</h4> <input type='text' id='nivel' class='form-control'  value=''><h4>Nome da Página</h4> <input type='text' id='quale' class='form-control'  value=''> <br><br><span> <button class='btn btn-defaut' id='cantanon'>ATUALIZAR</button></span><span id='vumora'  style='margin-left:30px;'></span>";

$("#condcim").html(varu);

$("#condbax").attr('src','partials/botaob.html');


}


</script>
