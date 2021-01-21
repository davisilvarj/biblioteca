<?php
	function buscarUsuarios($connect){
		$usuarios = array();
		$resultUsuario = mysqli_query($connect, "select * from admincontrol");
		while ($usuario = mysqli_fetch_assoc($resultUsuario)){
			array_push($usuarios, $usuario);
		}
		return $usuarios;
	}

	function userLocal($connect, $drt){
		$usuarios = array();
		$resultUsuario = mysqli_query($connect, "select * from admincontrol where drt = {$drt}");
		while ($usuario = mysqli_fetch_assoc($resultUsuario)){
			array_push($usuarios, $usuario);
		}
		return $usuarios;
	}


	function buscaDoc($connect, $id_arquivo){
			$documentos = array();
			$result = mysqli_query($connect, "select * from arquivo where id_arquivo = $id_arquivo");
			while($documento = mysqli_fetch_assoc($result)){
				array_push($documentos, $documento);
		}
		return $documentos;
	}

	function buscaArquivo($connect){
		$arquivos = array();
		$resultArquivo  = mysqli_query($connect, "select * from autor");
		while ($arquivo = mysqli_fetch_assoc($resultArquivo)){
			array_push($arquivos, $arquivo);
		}
		return $arquivos;	
	}

	function buscaMono($connect, $id_titulo){
			$monografias = array();
			$result_monografia = mysqli_query($connect, "select * from titulo t
			left join autor a on a.fk_titulo = t.id_titulo
			left join curso c on c.id_curso = t.fk_curso
			left join arquivo arq on arq.id_arquivo = t.fk_arquivo
			left join palavra p on p.fk_titulo = t.id_titulo
			where t.id_titulo = {$id_titulo}");
			while($monografia = mysqli_fetch_assoc($result_monografia)){
				array_push($monografias, $monografia);
		}
		return $monografias;
	}

	function buscaTituloLimit($connect, $nome_pesquisa, $inicio, $qntExibir){
		$porTitulos = array();
		$result_titulo =mysqli_query($connect, "select * from titulo t
			left join autor a on a.fk_titulo = t.id_titulo
			left join curso c on c.id_curso = t.fk_curso
			left join arquivo arq on arq.id_arquivo = t.fk_arquivo
			left join palavra p on p.fk_titulo = t.id_titulo
			where t.titulo like '%$nome_pesquisa%'
			limit $inicio, $qntExibir");
		while ($porTitulo = mysqli_fetch_assoc($result_titulo)) {
			array_push($porTitulos, $porTitulo);
		}
		return $porTitulos;
	}
	function buscaCursoLimit($connect, $curso_pesquisa, $inicio, $qntExibir){
		$porCursos = array();
		$result_curso =mysqli_query($connect, "select * from titulo t
			left join autor a on a.fk_titulo = t.id_titulo
			left join curso c on c.id_curso = t.fk_curso
			left join arquivo arq on arq.id_arquivo = t.fk_arquivo
			left join palavra p on p.fk_titulo = t.id_titulo
			where t.fk_curso like '%$curso_pesquisa%'
			limit $inicio, $qntExibir");
		while ($porCurso = mysqli_fetch_assoc($result_curso)) {
			array_push($porCursos, $porCurso);
		}
		return $porCursos;
	}

	function buscaAutor($connect, $nome_pesquisa){
		$porAutores = array();
		$result_autor = mysqli_query($connect, "select * from titulo t
			left join autor a on a.fk_titulo = t.id_titulo
			left join curso c on c.id_curso = t.fk_curso
			left join arquivo arq on arq.id_arquivo = t.fk_arquivo
			left join palavra p on p.fk_titulo = t.id_titulo
			where a.nome_autor like '%$nome_pesquisa%'");
		while ($porAutor = mysqli_fetch_assoc($result_autor)){
			array_push($porAutores, $porAutor);
		}
		return $porAutores;
	}

	function buscaAutorLimit($connect, $nome_pesquisa, $inicio, $qntExibir){
		$listas = array();
		$result_lista = mysqli_query($connect, "select * from titulo t
			left join autor a on a.fk_titulo = t.id_titulo
			left join curso c on c.id_curso = t.fk_curso
			left join arquivo arq on arq.id_arquivo = t.fk_arquivo
			left join palavra p on p.fk_titulo = t.id_titulo
			where a.nome_autor like '%$nome_pesquisa%'
			limit $inicio, $qntExibir");

		while ($lista = mysqli_fetch_assoc($result_lista)){
			array_push($listas, $lista);
		}
		return $listas;
	}

	function buscaPalavraLimit($connect, $nome_pesquisa, $inicio, $qntExibir){
		$palavras = array();
		$result_palavra = mysqli_query($connect, "select * from titulo t
			left join autor a on a.fk_titulo = t.id_titulo
			left join curso c on c.id_curso = t.fk_curso
			left join arquivo arq on arq.id_arquivo = t.fk_arquivo
			left join palavra p on p.fk_titulo = t.id_titulo
			where p.pl_primeira like '%$nome_pesquisa%' or 
			p.pl_segunda like '%$nome_pesquisa%' or
			p.pl_terceira like '%$nome_pesquisa%'
			limit $inicio, $qntExibir");

		while ($palavra = mysqli_fetch_assoc($result_palavra)){
			array_push($palavras, $palavra);
		}
		return $palavras;
	}
	
/*CAPTURA ID*/
	function capturaIdArquivo($connect){
	 	$arquivos = array();
	 	$result_arquivo = mysqli_query($connect, "select * from arquivo");
		while($arquivo = mysqli_fetch_assoc($result_arquivo)){
	 		array_push($arquivos, $arquivo);
	 	}
	 	return $arquivos;
 	}
	$arquivos = capturaIdArquivo($connect);

	foreach ($arquivos as $arquivo) {
		$fk_arquivo = $arquivo['id_arquivo']+1;
	}


	function capturaIdTitulo($connect){
		$titulos = array();
		$result_titulo = mysqli_query($connect, "select * from titulo");
		while ($titulo = mysqli_fetch_assoc($result_titulo)){
			array_push($titulos, $titulo);
		}
		return $titulos;
	}

	$titulos = capturaIdTitulo($connect);

	foreach ($titulos as $titulo) {
		$fk_titulo = $titulo['id_titulo']+1;
	}



/*LISTA GERAL*/	
	function listMonografia($connect){
		$listas = array();
		$result_lista = mysqli_query($connect, "select * from titulo t
			left join autor a on a.fk_titulo = t.id_titulo
			left join curso c on c.id_curso = t.fk_curso
			left join arquivo arq on arq.id_arquivo = t.fk_arquivo
			order by c.id_curso asc");

		while ($lista = mysqli_fetch_assoc($result_lista)){
			array_push($listas, $lista);
		}
		return $listas;
	}

	function listMonografia2($connect, $inicio, $qntExibir){
		$listas = array();
		$result_lista = mysqli_query($connect, "select * from titulo t
			left join autor a on a.fk_titulo = t.id_titulo
			left join curso c on c.id_curso = t.fk_curso
			left join arquivo arq on arq.id_arquivo = t.fk_arquivo
			left join palavra p on p.fk_titulo = t.id_titulo
			order by c.id_curso asc
			limit $inicio, $qntExibir");

		while ($lista = mysqli_fetch_assoc($result_lista)){
			array_push($listas, $lista);
		}
		return $listas;
	}

/*CONTADORES*/
	function contMonografia($connect){
		$result_monografia = mysqli_query($connect, "select * from titulo");
		$num_rows = mysqli_num_rows($result_monografia);
		return $num_rows;
	}

	function contAutores($connect, $nome_pesquisa){
		$result_autores = mysqli_query($connect, "select * from autor
			where nome_autor like '%{$nome_pesquisa}%'");
		$qnt_autores = mysqli_num_rows($result_autores);
		return $qnt_autores;
	}
	function contTitulos($connect, $nome_pesquisa){
		$cont_titulos = mysqli_query($connect, "select * from titulo
			where titulo like '%{$nome_pesquisa}%'");
		$qnt_titulos = mysqli_num_rows($cont_titulos);
		return $qnt_titulos;
	}

	function contCursos($connect, $curso_pesquisa){
		$cont_cursos = mysqli_query($connect, "select * from titulo
			where fk_curso like '%{$curso_pesquisa}%'");
		$qnt_cursos = mysqli_num_rows($cont_cursos);
		return $qnt_cursos;
	}

	function contPalavras($connect, $nome_pesquisa){
		$cont_palavras = mysqli_query($connect, "select * from palavra
			where pl_primeira or pl_segunda or pl_terceira 
			like '%{$nome_pesquisa}%'");
		$cont_palavras = mysqli_num_rows($cont_palavras);
		return $cont_palavras;
		}
