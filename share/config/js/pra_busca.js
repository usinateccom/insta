
$("#botao_busca").click(function(){


$("#alfa1").css("z-index", "9998");
$("#alfa1").removeClass("dnone");
$("#alfa1").addClass("fadeIn");
$("#aguard").css("z-index", "9999");
$('#aguard').css("display", 'table');

var busca_rua = $("#busca_rua").val(), data_init = $("#data_init").val(), hora_init = $("#hora_init").val(), data_end = $("#data_end").val(), hora_end = $("#hora_end").val();


if(busca_rua == ""){


	var busca_rua = '-';
}


if(data_init == ""){


	var data_init = '-';
}

if(hora_init == ""){


	var hora_init = '-';
}

if(data_end == ""){


	var data_end = '-';
}

if(hora_end == ""){


	var hora_end = '-';
}

$("#busca_pulo").val(busca_rua + '|||' + data_init + '|||' + hora_init + '|||' + data_end + '|||' + hora_end);

$("#fominho").submit();


}); // fim da funcao