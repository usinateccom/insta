

<div class="regua" style="background-image: url(<?php echo $ponto; ?>imagens/locacao%20carros%20compartilhamento%20fundobv.jpg); background-size: 100% 100%; color: #fff; text-shadow: 1px 1px #000; margin-top: -48px;">

<center>
<h2>Como utilizar nossa plataforma</h2><br><div class="colored-line"></div></center><br><br>

<div class="encaixa">


<style>

.ativof{display: inline-table; float:left; border: 3px solid #eee; box-shadow: 2px 2px #000; padding: 2%; color:#fff;  border-radius: 16px; height: 40px;}

.inativof{display: inline-table; float:left;  padding: 2%; display: inline-table; float:left;  padding: 2%; color:#fff;  border-radius: 16px; height: 40px; border: 3px solid transparent;}

</style>



<div class="ativof pite" id='mot' style=" height: 60px; width: 40%; margin: 5%; margin-top: 10px; max-height: 60px; padding: 3px;">



<center>
<table border='0' cellspacing="0" cellpadding="0" style="border: 0px; padding: 0px; margin: 0px;"><tr><td width="60">

<img src="<?php echo $ponto; ?>imagens/carro compartilhado motorista.png"  style="width: 40px; height: 40px;" class="rolico" title="<?php echo $tit_u; ?>" alt="<?php echo $alt_u; ?> style='box-shadow: 2px 2px #000'">

</td><td>
						<h3 class="" style="text-shadow: 1px 1px #000; margin-top: 6px;">Motorista</h3></td></tr></table>
</center>

</div>

<div class="inativof pite" id='pot' style="height: 60px; width: 40%; margin: 5%;  margin-top: 10px; max-height: 60px; padding: 3px;">



<center><table border='0' cellspacing="0" cellpadding="0" style="border: 0px;padding: 0px; margin: 0px;"><tr><td width="60">
<img src="<?php echo $ponto; ?>imagens/carro compartilhado proprietario.jpg"  style="width: 40px; height: 40px;" class="rolico" title="<?php echo $tit_u; ?>" alt="<?php echo $alt_u; ?>  style='box-shadow: 2px 2px #000'">

</td><td>
						<h3 class="" style="text-shadow: 1px 1px #000; margin-top: 6px;">Proprietário</h3>

					</td></tr></table>
</center>

</div>

<div class="regua" style="width:1024px; margin-top: -60px; text-shadow: 1px 1px #000;">


<div id="motcont" class="fundobrank">
<table style="border:0px; width: 100%;" border='0' cellpadding="0" cellspacing="0"><tr><td valign="top">

<div class="bolan" style="margin-bottom: 80px; margin-top: 10px; ">
1</div>
<div class="bolan" style="margin-bottom: 80px; margin-top: -10px">
2</div>

<div class="bolan" style="margin-bottom: 80px;  margin-top: -20px">
3</div>
<div class="bolan" style="margin-bottom: 80px; margin-top: -20px"">
4</div>
<div class="bolan" style=" margin-top: -30px">
5</div>

</td><td>

<h4>Escolha o carro e a data</h4>

Escolha o carro que mais lhe agrada observe a disponibilidade
<br>

<br>

<h4>Login e cadastro</h4>

Faça seu login e cadastre seus dados, tenha certeza de inserir corretamente as informações
<br>

<br>


<h4>Fique calmo!</h4>

Aguarde um pouquinho sua solicitação está sendo verificada
<br>

<br>

<h4>Pagamento e chave na mão</h4>

Agora é só curtir, mas não se esquece de analisar o estado do carro
<br>

<br>


<h4>Devolva e avalie</h4>

Devolva o carro sempre no estado que recebeu e não esqueça de dar sua nota

</td></tr></table>
</div>

<div id="potcont" class="dnone fundobrank">
<table style="border:0px; width: 100%;" border='0' cellpadding="0" cellspacing="0"><tr><td>

<div class="bolan" style="margin-bottom: 80px; margin-top: 10px"">
1</div>
<div class="bolan" style="margin-bottom: 80px; margin-top: -10px">
2</div>

<div class="bolan" style="margin-bottom: 80px;  margin-top: -20px">
3</div>
<div class="bolan" style="margin-bottom: 80px; margin-top: -20px"">
4</div>
<div class="bolan" style=" margin-top: -30px">
5</div>

</td><td>
<h4>Login e cadastro</h4>

Faça seu login e cadastre seus dados, tenha certeza de inserir corretamente as informações
<br><br>



<h4>Receba a solicitação</h4>

Vai chover solicitações de amigos querendo alugar seu veículo.
<br><br>


<h4>Análise o condutor</h4>

Você vai escolher quem vai dirigir seu veículo, afinal você quem dá as cartas
<br><br>


<h4>Libere as chaves</h4>

Entregue o 
veículo no local programado lembre-se de passar as suas dicas de uso do seu veiculo.
<br>

<h4>Receba, avalie e solicite o pagamento</h4>

Receba o carro, verifique se está tudo certo e avalie o condutor. O pagamento refente ao aluguel será depositado na sua conta automaticamente


</td></tr></table>
</div>




</div>
</div>
</div>

<style>
.fundobrank{border-top-right-radius: 16px; border-top-left-radius: 16px; color: #fff; text-shadow: #000; padding: 10px; margin-top: -30px; }
.fundobrank h3{font-weight: bolder;}
</style>
<script>
$("#mot").click(function(){
	
	$("#mot").removeClass("inativof");
	$("#mot").addClass("ativof");
	
	$("#pot").removeClass("ativof");
	$("#pot").addClass("inativof");
	$("#potcont").addClass("dnone");
	$("#motcont").removeClass("dnone");
	
});


$("#pot").click(function(){
	
	$("#pot").removeClass("inativof");
	$("#pot").addClass("ativof");
	
	$("#mot").removeClass("ativof");
	$("#mot").addClass("inativof");
	$("#potcont").removeClass("dnone");
	$("#motcont").addClass("dnone");
	
});


</script>


	<style>

.bolan{ border: 4px solid #eee; color: #eee; display: table; font-size: 20px; width: 40px; height: 40px; margin: auto; text-align: center; font-weight: bold; margin-top: 40px; border-radius: 20px; -webkit-border-radius: 20px; -moz-border-radius: 20px; -o-border-radius: 20px; -ms-border-radius:20px; box-shadow: 1px 1px #000;}
</style>