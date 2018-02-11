
<?php

$bot = "";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	

$bot = $_POST['belgo'];


} else{


header("location: https://www.instashare.me/manutencao/");

}// post


?>

<!DOCTYPE html>
<html>
<head>

<title>Manutenção Instashare</title>


<script>
function suba(){

document.getElementById("fuji").submit();

}
</script>

</head>
<body onload="suba()">
<div style="position: fixed; top: 50%; left: 50%; width: 150px; margin-left: -75px; color: #000; font-size: 14px; font-weight: bold;">
<center>AGUARDE...</center></div>



</div>


<form action='dash/' method="post" style="display: none;" id='fuji'>
	
<input type="text" name="belgo" id='belgo' value="<?php echo $bot; ?>">

</form>
</body>
</html>
