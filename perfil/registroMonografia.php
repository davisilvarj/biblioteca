<?php
	include "../estrutura/head.php";
	include "../regras/acessoUser.php";
?>
<div style="display: contents; position: relative;">	
<?php
verifyUser();
	
	if(userIsLog()){
		include "../estrutura/menu.php";
		include "../estrutura/formulario.php";
	}
?>