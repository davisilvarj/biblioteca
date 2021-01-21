<?php
	include "../banco/connect.php";
	include "../banco/delDados.php";
	include "../banco/upDados.php";

	$nome	=	$_POST['nome'];
	$drt	=	$_POST['drt'];
	$email	=	$_POST['email'];
	$funcao	=	$_POST['funcao'];

	$button	=	$_POST['button'];
	$id 	= 	$_POST['id'];


	if($button == 'atualiza'){
			
		upControle($connect, $nome, $drt, $email, $funcao, $id);

		header("Location: ../perfil/controlador.php");
	}
	if ($button == 'deleta') {
		delControle($connect, $id);
		
		header("Location: ../perfil/controlador.php");
	}