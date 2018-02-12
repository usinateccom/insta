$(document).ready( function() {
   /* Executa a requisição quando o campo CEP perder o foco */
   $('#cep').blur(function(){



$('#logradouro').val("Aguarde...");
                        $('#bairro').val("Aguarde...");
                        $('#cidade').val("Aguarde...");
                        $('#estado').val("Aguarde...");

           /* Configura a requisição AJAX */
           $.ajax({
                url : '../funcoes/consultar_cep.php', /* URL que será chamada */ 
                type : 'POST', /* Tipo da requisição */ 
                data: 'cep=' + $('#cep').val(), /* dado que será enviado via POST */
                dataType: 'json', /* Tipo de transmissão */
                success: function(data){
                    if(data.sucesso == 1){
                        $('#logradouro').val(data.rua);
                        $('#bairro').val(data.bairro);
                        $('#cidade').val(data.cidade);
                        $('#estado').val(data.estado);
 
                        $('#numero').focus();
                    }
                }
           });   
   return false;    
   });
});