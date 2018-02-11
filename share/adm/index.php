<?php

//parametros iniciais
//alterar aqui
$titulo = "Administração InstaShare";
session_start();


$area = "1";

if(!isset($_SESSION['login']) and !isset($_SESSION['senha'])){

}
else{
echo "<script>location.href='painel/'</script>";
}


include "../config/config.php";



?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login - <?php echo $titulo; ?></title>



<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="../config/css/geral.css">
<link rel="stylesheet" href="css/login.css">
<script src="../config/js/jquery.min.js"></script>
<script src="../config/js/funcoes.js"></script>


<LINK href="../favcon.ico" rel="shortcut icon">
<LINK href="../favicon.ico" rel="icon">


<script>
function foca(){
	
	//alert('teste');
	$("#login").focus();
	
}

$(document).ready(function(){

$("#entrab").click(function(){


$("#notif_log").html("Aguarde...");

disab('login', 'senha');
	recado('notif_log', 'Aguarde...');
	
$("#balgo").val("<?php echo $area.':::'; ?>"+cat_duplo('login', 'senha'));

if(($("#login").val() == '') || ($("#senha").val() == '') ){


	recado('notif_log', 'Digite Login e Senha');
	$("#login").focus();

	
	$("#login").prop('disabled', false);
	$("#senha").prop('disabled', false);

}else{

	
    $.getJSON("../funcoes/login_protegido.php",
    {bingo: "<?php echo $area.':::'; ?>"+cat_duplo('login', 'senha')},

    function(json){
        
        var belga = json.campo;
        
      recado('notif_log', belga);
        

	
	$("#login").prop('disabled', false);
	$("#senha").prop('disabled', false);





if((belga == "Login/Senha Inválido(s).")||(belga == 'Acesso não permitido.')){


	$("#login").focus();

}

if(belga == "Login Bem-Sucedido."){

var tomo = $("#balgo").val();


$("#sinji").submit();


}
    
    }); // fim do json

}// if vazio

}); // funcao

}); // ready
	/*
	
	
	
	*/

//window.location.replace("adm.php");


</script>
<?php

include "../funcoes/funcoesjs.php";

?>
</head>

<body onload="foca()">


<div  class="meio">

<br>
<center><img src="../imagens/carro compartilhado locacao instashare logo.png" class="sess"><br><br>

<label>LOGIN : &nbsp;</label>

<input type="text" name="login" id="login" class="braga" maxlength="25" autofocus="autofocus" /><br /><br>
<label>SENHA :</label>
<input type="password" name="senha" id="senha" class="braga" maxlength="25" /><br /><br>
<button id="entrab" class='btn-orange' >Entrar</button><br><br>


<div id="notif_log" class="vermelho"></div><br><br><br><br>
</center>

<form method='post' action='painel/' id='sinji' class="dnone">
	<input type="text" name="belgo" id='balgo'>

</form>

</div>

 <?php
 /*
if(isset($_POST['submit'])==1){
   $login = str_replace("'","", $_POST['login']);
$senha = str_replace("'","",$_POST['senha']);
$_SESSION['login'] = $login;
$_SESSION['senha'] = $senha;





$sql = mysqli_query("select * from usuarios where login = '$loginf' and senha = '$senhaf'");
if(mysqli_num_rows($sql) == 0){
echo "nao foi encontrado registro";
}else{
echo "<script>location.href='adm.php'</script>";
}
}
*/


//include "partials_adm/funcoes_antigas_sem_cookie.php";
// includes "partial_adm/funcoes_novas_sessao.php";

// include "partials_adm/funcoes_estatistica_sessao.php"

?>




</body>
</html>