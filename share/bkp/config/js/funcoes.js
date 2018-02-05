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



function fechpop(){


$(".popup").css("display", "none");
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
$("#alfa").removeClass("dnone");
$("#login_p").css("z-index", "9999");
$('#login_p').css("display", 'table');

$("#login_f").focus();

}

function destsaca_el(elementoid){

$("#"+elementoid).css("z-index", '9999');


}

function demonstrativo(){

	//alerta();

$("#alfa").css("z-index", "9998");
$("#alfa").removeClass("dnone");
$("#demonst_p").css("z-index", "9999");
$('#demonst_p').css("display", 'table');

$("#concha_login").focus();

}


