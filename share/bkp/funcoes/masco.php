<?php

$pagina = $_GET['pagina'];

?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
<script src="../config/js/jquery-1.5.2.min.js"></script>
<script src="../config/js/jquery.maskedinput.js"></script>

 <script type="text/javascript">
            $(document).ready(function(){
				
			
				$("#data_init",window.parent.document).mask("99/99/9999");
				$("#hora_init", window.parent.document).mask("99:99");
				$("#hora_end", window.parent.document).mask("99:99");
					$("#data_end",window.parent.document).mask("99/99/9999");
			});

</script>

</head>

<body>
</body>
</html>