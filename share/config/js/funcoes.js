
function alerta(){
	

	alert('confirma');
}

function cat_duplo(idum, iddois){

var duma = $("#"+idum).val(), dduas =	$("#"+iddois).val();

return duma+':::'+dduas;
	
}

function disab(idum, iddois){
	
	$("#"+idum).prop('disabled', true);
	$("#"+iddois).prop('disabled', true);
}

function habil(idum, iddois){
	
	$("#"+idum).prop('disabled', false);
	$("#"+iddois).prop('disabled', false);
}


function reseta(){

window.location.reload();


}

function logoutp(){

//document.cookie = "brasilweb_instashare" + '=; expires=';

$("#alfa1").css("z-index", "9998");
$("#alfa1").removeClass("dnone");$("#alfa1").addClass("fadeIn");
$("#aguard").css("z-index", "9999");
$('#aguard').removeClass("dnone");$("#aguard").addClass("fadeIn");

<?php


if($logado == 'sim'){

echo "revoke()";

}

?>
// fa o json aqui

var coma = $("#reservaid").val();
<?php echo
 "$.getJSON('".$ponto."funcoes/logout.php',"; ?>
       {bingo: coma},
      function(json){
        
var fankia = json.prinome;

apagacook("brasilweb_instashare", "");

window.location.reload();

  });

}

function apagacook(cookien, valor){

var expires;

var date; 



date = new Date(); //  criando o COOKIE com a data atual




date.setTime(date.getTime()+(1000*24*60*60*1000));


expires = date.toUTCString();

document.cookie = cookien+"="+valor+"; expires=Thu, 01 Jan 1970 00:00:01 GMT; path=/";


} // fim da funcao




function fechpop(){


$(".popup").addClass("dnone");
$("#alfa").addClass("dnone");


}

function recado(idelem, dizeres){
	
	$("#"+idelem).html(dizeres);
	
}


function alfanon(){


$("#alfa").addClass("dnone");

}

function login_entra(){

	//alerta();

$("#alfa").css("z-index", "9998");
$("#alfa").removeClass("dnone");$("#alfa").addClass("fadeIn");
$("#login_p").css("z-index", "9999");
$('#login_p').removeClass("dnone");$("#login_p").addClass("fadeIn");

$("#concha_login").focus();

}

function destsaca_el(elementoid){

$("#"+elementoid).css("z-index", '9999');


}

function demonstrativo(){

	//alerta();

$("#alfa").css("z-index", "9998");
$("#alfa").removeClass("dnone");$("#alfa").addClass("fadeIn");
$("#demonst_p").css("z-index", "9999");
$('#demonst_p').removeClass("dnone");$("#demonst_p").addClass("fadeIn");

}








