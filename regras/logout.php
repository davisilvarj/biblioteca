<?php
	include "acessoUser.php";
	logout();
	$_SESSION["success"] = "Deslogado com sucesso.";
	header("Location: ../estrutura/login.php");
	die();

    