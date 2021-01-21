<?php
	$monografias = buscaMono($connect, $id_titulo);
	foreach ($monografias as $monografia) {
		$titulo = $monografia['titulo'];
		$nome = $monografia['nome'];
		$autor = $monografia['nome_autor'];
		$ano	= $monografia['ano'];
		$doc	= $monografia['doc'];
	}
?>

<div class="areageral">
    <iframe  src="../upload/<?= $doc ?>#toolbar=0" width="100%" height="860px">
    	
    </iframe>
</div>    


