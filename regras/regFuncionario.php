<?php
	include "../banco/acessoBanco.php";

	$nome	=	$_POST['nome'];
	$drt	=	$_POST['drt'];
	$email	=	$_POST['email'];
	$funcao	=	$_POST['funcao'];

	if(inserirFuncionario($connect, $nome, $drt, $email, $funcao)){
		header("Location: ../perfil/geral.php");
	}else {
		$msg = mysqli_error($connect);
		echo $msg;
	}
?>