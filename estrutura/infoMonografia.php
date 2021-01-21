<?php
	$monografias = buscaMono($connect, $id_titulo);
	foreach ($monografias as $monografia) {
		$titulo = $monografia['titulo'];
		$nome = $monografia['nome_autor'];
		$autor = $monografia['nome_autor'];
		$ano	= $monografia['ano'];
		$curso = $monografia['disciplina'];
		$pl_primeira =	$monografia['pl_primeira'];
		$pl_segunda =	$monografia['pl_segunda'];
		$pl_terceira =	$monografia['pl_terceira'];

	}
?>
	<div class="card bg-info" style="width: 15vw; height: 65vh; position: fixed; float: left; margin: 16em 1em; ">
		<div>
			<h4 class="card-header text-light"> Monografia</h4>
		</div>
		<div class="card-body bg-light text-dark form-row" style="overflow: scroll;">
			<label class="col-md-12"><b>Titulo:</b> </br> <?= $titulo ?> </label>
			<label class="col-md-12"><b>Autor:</b></br> <?= $nome ?></label>
			<label class="col-md-12"><b>Ano:</b> <?= $ano?></label>
			<label class="col-md-12"><b>Curso:</b> <?= $curso ?> </label>
			<label class="col-md-12"><b>Palavras Chaves:</b> </br></label>
			<label class="col-md-12"><?= $pl_primeira ?> / <?= $pl_segunda ?> / <?= $pl_terceira ?> </label>
		</div>
	</div>