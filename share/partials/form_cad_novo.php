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

?>
<style>
#tamu span{ width: 100px!important; }

#tamu label{ width: 100px!important; }
</style>

<div class="regua" id="tamu">
<table border='0' style="border:0px;"><tr><td style="border: 1px solid transparent">

<label>
<span>Nome</span>
            
          </label>
          <input id="nome_us" name="user[first_name]" class="fom requiredField validateInput" value="<?php echo $nomer[0]; ?>" type="text"></td><td style="border: 1px solid transparent"><label>
 <span>Sobrenome</span>
            
          </label>
          <input id="sobrenome_us" name="user[last_name]" class="fom requiredField validateInput" value="<?php echo $nomer[1]; ?>" type="text">
          
</td></tr><tr>

<td style="border: 1px solid transparent">
<label>
<span>Email</span>
            
          </label>
          <input id="email_us" name="user[first_name]" class="fom requiredField validateInput" value="<?php echo $mailon; ?>" type="text">

        </td><td style="border: 1px solid transparent">

          <label for="user_last_name">
            <span>Data Nasc.</span>
            
          </label>
          <input id="data_nasc" name="user[last_name]" class="fom requiredField validateInput" value="<?php echo $gil['data_nasc']; ?>" type="text">
          
        </td>



</tr>

<tr>
  
<td style="border: 1px solid transparent">
<label>
<span>CPF</span><?php //echo $pagina; ?>
            
          </label>
          <input id="cpf" name="user[first_name]" class="fom requiredField validateInput" value="<?php echo $gil["cfp_cnpj"];?>" type="text">

        </td><td style="border: 1px solid transparent">


 <label for="user_last_name">
            <span>Telefone</span>
            
          </label>
          <input id="telefonon" name="user[last_name]" class="fom requiredField validateInput" value="" type="text">
          

        </td>


</tr>
<tr>
<td style="border: 1px solid transparent">
<label>
<span>Senha</span><?php //echo $pagina; ?>
            
          </label>
          <input id="senhau" name="user[first_name]" class="fom requiredField validateInput" value="" type="password">

        </td><td style="border: 1px solid transparent">


 <label for="user_last_name">
            <span>Conf. Senha</span>
            
          </label>
          <input id="senhad" name="user[last_name]" class="fom requiredField validateInput" value="" type="password">
          

        </td>

</tr>

</table>

</div>