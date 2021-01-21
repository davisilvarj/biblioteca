<?php
	include "../estrutura/head.php";
	include "../regras/acessoUser.php";
	include "../banco/acessoBanco.php";
?>
<div style="display: contents; position: relative;">	
<?php
	$id_arquivo = $_GET['file'];
	$id_titulo = $_GET['file'];
verifyUser();
	
	if(userIsLog()){
		include "../estrutura/menu.php";
		include "../estrutura/infoMonografia.php";
		include "../estrutura/abrirArquivo.php";
	}
?>