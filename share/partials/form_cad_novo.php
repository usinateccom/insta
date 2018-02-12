<?php


$sol = sel_simples("dados_sensveis", "*", "where id_us = '$idzinho'");

$minog = mysql_fetch_array($sol);

$boru = sel_simples("us_nome_mail", "*", "where is_id = '$idzinho'");
$gil = mysql_fetch_array($boru);

$nomer = explode(" ", $gil["nome"]);

$bireim = sel_simples("usuarios_tt", "*", "where um = '$idzinho'");

if($gil["email"] == 'undefined'){

$mailon = "";

}else{

$mailon = $gil["email"];

}

$datann = $minog['data_nasc'];

$doc_jus = $minog['cfp_cnpj'];

//define formulário

$temo = sel_simples("tipo_cad", "*", "where id_usr = '$idzinho'");

$kaino = mysql_fetch_array($temo);

$tipocad = $kaino["tipo"];



if($tipocad == 'fisica'){

$nome = $nomer[0];

$sobrenome = $nomer[1];

$campu = "Nome:*";

$campd = "Sobrenome:*";

$campt = "Data Nasc.:*";

$campq = "Cpf:*";

$campc = "RG:*";

$camps = "CNH - Foto";

echo "<iframe src='../funcoes/cdp.php' class='dnone'></iframe>";

}else{

echo "<iframe src='../funcoes/cpd.php' class='dnone'></iframe>";


$prik = explode(" | ", $gil["nome"]);

$nome = $prik[0];

$sobrenome = $prik[1];

$campu = "R. Social:*";

$campd = "N. Fantasia:*";
$campt = "Data Fund.:*";
$campq = "Cnpj:*";
$campc = "Insc. Est.:*";
$camps = "Cartão CNPJ";
}


if($minog['cep'] == ""){
	
	$prona = "PREENCHA O CEP";
	
	$vigo = "diabled";
	
	$camppu = ' <input id="estado" name="" class="fom requiredField validateInput" value="PREENCHA O CEP" type="text" disabled>';
	$camppd = ' <input id="cidade" name="" class="fom requiredField validateInput" value="PREENCHA O CEP" type="text" disabled>';
	$camppt = ' <input id="bairro" name="" class="fom requiredField validateInput" value="PREENCHA O CEP" type="text" disabled>';
	
}else{
	
	$prona = "";
	$vigo = "";
}

?>
<style>
#tamu span{ width: 100px!important; }

#tamu label{ width: 100px!important; }
</style>


<div class="regua" id="tamu"><center>
<table border='0' style="border:0px;"><tr><td style="border: 1px solid transparent">

<label>
<span><?php echo $campu; ?></span>
            
          </label>
          <input id="nome_us" name="user[first_name]" class="fom requiredField validateInput" value="<?php echo $nome; ?>" type="text"></td><td style="border: 1px solid transparent"><label>
 <span><?php echo $campd; ?></span>
            
          </label>
          <input id="sobrenome_us" name="user[last_name]" class="fom requiredField validateInput" value="<?php echo $sobrenome; ?>" type="text">
          
</td></tr><tr>

<td style="border: 1px solid transparent">
<label>
<span>Email:*</span>
            
          </label>
          <input id="email_us" name="user[first_name]" class="fom requiredField validateInput" value="<?php echo $mailon; ?>" type="text">

        </td><td style="border: 1px solid transparent">

          <label for="user_last_name">
            <span><?php echo $campt; ?></span>
            
          </label>
          <input id="data_nasc" name="user[last_name]" class="fom requiredField validateInput" value="<?php echo $datann; ?>" type="text">
          
        </td>



</tr>

<tr>
  
<td style="border: 1px solid transparent">
<label>
<span><?php echo $campq; ?></span><?php //echo $pagina; ?>
            
          </label>
          <input id="cpf" name="user[first_name]" class="fom requiredField validateInput" value="<?php echo $minog["cfp_cnpj"]; ?>" type="text">

        </td><td style="border: 1px solid transparent">


 <label for="user_last_name">
            <span>Telefone:*</span>
            
          </label>
          <input id="telefonon" name="user[last_name]" class="fom requiredField validateInput" value="<?php echo $minog["telefonon"]; ?>" type="text">
          

        </td>


</tr>
<tr>
<td style="border: 1px solid transparent">
<label>
<span>Cep:*</span>
            
          </label>
          <input id="cep" name="user[first_name]" class="fom requiredField validateInput" value="" type="text">

        </td><td style="border: 1px solid transparent">


 <label for="user_last_name">
            <span>Estado:*</span>
            
          </label>
          <?php echo $camppu; ?>
          

        </td>

</tr>

<tr>
<td style="border: 1px solid transparent">
<label>
<span>Cidade:*</span>
            
          </label>
         <?php echo $camppd; ?>

        </td><td style="border: 1px solid transparent">


 <label for="user_last_name">
            <span>Bairro:*</span>
            
          </label>
          <?php echo $camppt; ?>
          

        </td>

</tr>

<tr><td colspan='2' style="border: 1px solid transparent">



<label>
<span>Endereço:*</span>
            
          </label>
          <input id="logradouro" name="user[first_name]" class="fom requiredField validateInput" value="PREENCHA O CEP" type="text" disabled style='width: 452px;'> Nº:* <input id="numero" name="user[first_name]" class="fom requiredField validateInput" value="" type="text" disabled style='width: 60px;'> Compl. <input id="compl" name="user[first_name]" class="fom requiredField validateInput" value="" type="text" disabled style='width: 60px;'>




</td></tr>


<tr>
<td style="border: 1px solid transparent">
<label>
<span><?php echo $campc; ?></span>
            
          </label>
        
<input id="rg_inc" name="user[first_name]" class="fom requiredField validateInput" value="<?php echo $minog["rg_insc"]; ?>" type="text">


        </td><td style="border: 1px solid transparent">


 
        </td>

</tr>




</table>
</center>

<left>
<hr class="" style="width: 94%"></hr>
</left>
<h3>Imagens</h3>

<table width="100%" style="border: 0px;">
  
<tr>
<td width="50%" style="border: 0px;" valign="top">

<h4>Imagem de Perfil</h4>

<center>
<br><br>
<img src="<?php 

$bubn = sel_simples("foto_usr", "*", "where idUsr = '$idzinho'");
$aga = mysql_fetch_array($bubn);

echo $ponto.$aga["foto"];


?>" class="rolicon">

<br><br><button class="pino" id="envia_foto" style="width: 200px;">Alterar Imagem</button><br><br>

  </center>

</td>

<td width="50%" style="border: 0px;" valign="top">

<h4><?php echo $camps; ?></h4>

<br><br><br><br><br>
<center>
<?php 

if($tipocad == 'fisica'){


echo "[NEHUMA IMAGEM ENVIADA]";


}else{



echo "[NENHUM DOCUMENTO ENVIADO]";


}



 ?>
<br><br><br>
 <br><br><button class="pino" id="envia_doc" style="width: 200px;">Alterar Documento</button><br><br>
</center>


</td>


</tr>




</table>


<hr class="" style="width: 94%"></hr>





</div>

<script>
  
//aletar foto




 $('#cep').blur(function(){

//alert('foi');

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
 
   $('#logradouro').prop('disabled', false);
                        $('#bairro').prop('disabled', false);
                        $('#cidade').prop('disabled', false);
                        $('#estado').prop('disabled', false);
 


$('#numero').prop('disabled', false);
$('#compl').prop('disabled', false);


                        $('#numero').focus();
                    }
                }
           });   
   return false;    
   })


</script>



<?php


//inclue novas funcoes de b.e.

include "partials/validacao_cad.php";

?>