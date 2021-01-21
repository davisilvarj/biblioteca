<?php

	$tipo_pesquisa 	=	$_REQUEST['tipo_pesquisa'];
	$nome_pesquisa	=	$_REQUEST['nome_pesquisa'];
	$curso_pesquisa	= 	$_REQUEST['curso_pesquisa'];
	

	$pagina = (!isset($_GET['pagina'])) ? 1: $_GET['pagina'];
	$qntExibir = 5;

	$inicio = ($qntExibir*$pagina)-$qntExibir;
	
verifyUser();
	
	if(userIsLog()){
?>
<div class="areageral">

	<?php 
		if($tipo_pesquisa == 'titulo'){
			include "../estrutura/openTitulo.php";
		}if($tipo_pesquisa == 'autor'){
			include "../estrutura/openAutor.php";
		}if($tipo_pesquisa == 'curso'){
			include "../estrutura/openCurso.php";
		}if($tipo_pesquisa == 'palavra'){
			include "../estrutura/openPalavra.php";
		} 
	}	
	?>
</div>
