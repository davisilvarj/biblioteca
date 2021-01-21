<?php
	include "../banco/connect.php";
	include "../banco/upDados.php";

	$id_titulo = $_POST['id_titulo'];
	$autor = $_POST['autor'];
	$titulo = $_POST['titulo'];
	$disciplina = $_POST['disciplina'];
	$ano = $_POST['ano'];

	$pl_primeira = $_POST['pl_primeira'];
 	$pl_segunda = $_POST['pl_segunda'];
 	$pl_terceira = $_POST['pl_terceira'];

 	$num_classificacao = $_POST['num_classificacao'];

	echo $id_titulo ."</br>";
	echo $autor ."</br>";
	echo $titulo ."</br>";
	echo $disciplina ."</br>";
	echo $ano ."</br>";
	echo $pl_primeira ."</br>";
	echo $pl_segunda."</br>";
	echo $pl_terceira ."</br>";


	if(upTitulo($connect, $titulo, $num_classificacao, $ano, $disciplina, $id_titulo)
		and upAutor($connect, $autor, $id_titulo)
			and upPalavra($connect, $pl_primeira, $pl_segunda, $pl_terceira, $id_titulo)){
		header("Location: ../page/atualizarMonografia.php?id_titulo=$id_titulo");
	}