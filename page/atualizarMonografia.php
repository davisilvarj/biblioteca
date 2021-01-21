<?php
	include "../estrutura/head.php";
	include "../regras/acessoUser.php";
	include "../estrutura/menu.php";
	include "../banco/acessoBanco.php";

	$id_titulo = $_REQUEST["id_titulo"];

	$monografias = buscaMono($connect, $id_titulo);

	foreach ($monografias as $monografia) {
		$autor = $monografia['nome_autor'];
		$titulo = $monografia['titulo'];
		$curso = $monografia['disciplina'];
		$fk_curso = $monografia['fk_curso'];
		$ano = $monografia['ano'];
		$pl_primeira =	$monografia['pl_primeira'];
		$pl_segunda =	$monografia['pl_segunda'];
		$pl_terceira =	$monografia['pl_terceira'];
		$num_classificacao = $monografia['num_classificacao'];
	}
?>

<div class="areageral">
	<div class="areaformulario" >
		<div class="card form">
			<form action="../regras/upMonografia.php" method="post" enctype="multipart/form-data">
				<div class="card text-left" >
					<div class="card-header"> 
						<h3 class="card-title">Informações da Monografia / TCC: </h3>
					</div>
					<div class="card-body">
						<input type="hidden" name="id_titulo" value="<?=$id_titulo?>">
						<label>Autor(a): </label>
						<input type="text" class="form-control" name="autor" value="<?= $autor ?>">
						<label>Título: </label>
						<input type="text" class="form-control" name="titulo" value="<?= $titulo ?>">
						<label>Curso: </label>
						<select name="disciplina" class="form-control">
							<option name="disciplina" value="<?= $fk_curso?>"> <?= $curso ?> </option>
							<option name="disciplina" value="1"> Administração </option>
							<option name="disciplina" value="2"> Ciências Contábeis </option>
							<option name="disciplina" value="3"> Ciências Econômicas </option>
							<option name="disciplina" value="4"> Direito </option>
						</select>

						<label class="col-md-12">Número de Classificação: </label>
						<input type="text" class="form-control" name="num_classificacao" value="<?= $num_classificacao ?>">
						<label class="col-md-12">Palavras Chaves: </label>
						<input type="text" name="pl_primeira" value="<?= $pl_primeira ?>">
						<input type="text" name="pl_segunda" value="<?= $pl_segunda ?>">
						<input type="text" name="pl_terceira" value="<?= $pl_terceira ?>">
						
						<label class="col-md-12">Ano: </label>
						<input type="text" class="form-control" name="ano" value="<?= $ano ?>">
					</div>	
				</div>
				
				<button type="submit" name="botao" class="btn btn-primary col-md-2" style="margin: 1em 2em;"> OK </button>
			</form>
		</div>
	</div>	
</div>