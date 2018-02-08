<?php

//parametros iniciais
//alterar aqui
$titulo = "Painel InstaShare";
session_start();


if(!isset($_SESSION['login']) and !isset($_SESSION['senha'])){

}
else{
echo "<script>location.href='adm/'</script>";
}


include "config/configl.php";



?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login - <?php echo $titulo; ?></title>



<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="../config/css/geral.css">
<link rel="stylesheet" href="config/css/login.css">
<script src="config/js/jquery.min.js"></script>
<script src="../config/js/funcoes.js"></script>
<script>
function foca(){
	
	$("#login").focus();
	
}


$("#entra").click(function(){
	
	disab('login', 'senha');
	recado('notif_log', 'Aguarde...');
	
	
    $.getJSON("../funcoes/login_protegido.php",
    {bingo: cat_duplo('login', 'senha')},

    function(json){
        
        var belga = json.campo;
        
      recado('notif_log', belga);
        
 
habil('login', 'senha');
    
    }); // fim do json
	
	
	
});

</script>

</head>

<body onload="foca()">


<div  class="meio">

<br><br><br>
<center><img src="../wp-content/uploads/2017/12/IMG-20171213-WA0053.png" class="sess"><br><br>

<label>LOGIN : </label>

<input type="text" name="login" id="login" class="braga" maxlength="25"/><br /><br>
<label>SENHA :</label>
<input type="password" name="senha" id="senha" class="braga" maxlength="25" /><br /><br>
<button id="entra" class='btn-orange'>Entrar</button><br><br>
<div id="notif_log" class="vermelho"></div><br><br>
</center>



</div>

 <?php
if(isset($_POST['submit'])==1){
   $login = str_replace("'","", $_POST['login']);
$senha = str_replace("'","",$_POST['senha']);
$_SESSION['login'] = $login;
$_SESSION['senha'] = $senha;





$sql = mysqli_query("select * from usuarios where login = '$loginf' and senha = '$senhaf'");
if(mysqli_num_rows($sql) == 0){
echo "nao foi encontrado registro";
}else{
echo "<script>location.href='adm/'</script>";
}
}
?>




</body>
</html>