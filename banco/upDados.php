<?php
	function upControle($connect, $nome, $drt, $email, $funcao, $id){
		$query = "update admincontrol set nome = '{$nome}', drt = '{$drt}', email = '{$email}', funcao = '{$funcao}' where id = '{$id}'";
		return  mysqli_query($connect, $query);

	}

	function upTitulo($connect, $titulo, $num_classificacao, $ano, $disciplina, $id_titulo){
		$query = "update titulo set titulo = '{$titulo}', num_classificacao = '{$num_classificacao}', ano = '{$ano}', fk_curso = '{$disciplina}'
			where id_titulo = '{$id_titulo}'";
		return mysqli_query($connect, $query);
	}

	function upAutor($connect, $autor, $id_titulo){
		$query = "update autor set nome_autor = '{$autor}'
		where fk_titulo = '{$id_titulo}'";
		return mysqli_query($connect, $query);
	}

	function upPalavra($connect, $pl_primeira, $pl_segunda, $pl_terceira, $id_titulo){
		$query = "update palavra set pl_primeira = '{$pl_primeira}', pl_segunda = '{$pl_segunda}', pl_terceira = '{$pl_terceira}'
			where fk_titulo = '{$id_titulo}'";
		return mysqli_query($connect, $query);	
	}