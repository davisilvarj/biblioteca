<?php
	function inserirAutor($connect, $autor, $fk_titulo){
		$query  = "insert into autor (nome_autor, fk_titulo) values ('{$autor}', '{$fk_titulo}')";
		return mysqli_query($connect, $query);
	}

	function inserirTitulo($connect, $titulo, $num_classificacao, $ano, $curso, $arq_existe, $fk_arquivo){
		$query = "insert into titulo (titulo, num_classificacao, ano, fk_curso, arq_existe, fk_arquivo) values 
		('{$titulo}', '{$num_classificacao}' ,'{$ano}','{$curso}','{$arq_existe}','{$fk_arquivo}')";
		return mysqli_query($connect, $query);
	}
	

	function inserirFuncionario($connect, $nome, $drt, $email, $funcao){
		$query = "insert into admincontrol (nome, drt, email, funcao) values ('{$nome}','{$drt}','{$email}','{$funcao}')";
		return mysqli_query($connect, $query);
	}

	function inserirPalavra($connect, $pl_primeira, $pl_segunda, $pl_terceira, $fk_titulo){
		$query = "insert into palavra (pl_primeira, pl_segunda, pl_terceira, fk_titulo) 
			values ('{$pl_primeira}', '{$pl_segunda}', '{$pl_terceira}', '{$fk_titulo}')";
		return mysqli_query($connect, $query);	
	}