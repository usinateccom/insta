<?php

//$pagina = $_GET['pagina'];

?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
<script src="../config/js/jquery-1.5.2.min.js"></script>
<script src="../config/js/jquery.maskedinput.js"></script>

 <script type="text/javascript">
            $(document).ready(function(){
				
				//$("#data_nascj",window.parent.document).mask("99/99/9999");
				//$("#data_nasc",window.parent.document).mask("99/99/9999");
				//$("#cpf", window.parent.document).mask("999.999.999-99");
				//$("#telefonon", window.parent.document).mask("(99) 99999-9999");
		//$("#cnpj", window.parent.document).mask("99.999.999/9999-99");
		//	$("#telefononj", window.parent.document).mask("(99) 99999-9999");
			$("#cep", window.parent.document).mask("99.999-999");
			});

</script>

</head>

<body>
</body>
</html>