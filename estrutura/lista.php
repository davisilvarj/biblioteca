<?php

	$pagina = (!isset($_GET['pagina'])) ? 1: $_GET['pagina'];

	$qntExibir = 8;

	$qntTitulos = contMonografia($connect);

	$total = ceil($qntTitulos/$qntExibir);

	$inicio = ($qntExibir*$pagina)-$qntExibir;

	$listas2 = listMonografia2($connect, $inicio, $qntExibir);


?>
	<div class="areageral">
		<nav aria-label="..." style="width: 50vw; height: 5vh; margin: .5em 2em;">
			<ul class="pagination pagination">
				<?php if($pagina == 1 ){?>
					<li class="page-item" >
						<a class="page-link">
							Anterior	
						</a>
					</li>		
				<?php } 
					else{?>
						<li class="page-item" >
							<a class="page-link" href="?pagina=<?=$pagina-1?>">
								Anterior	
							</a>
						</li>	
				<?php		
					}		
		
					for ($i=1; $i <= $total ; $i++) {
						$cont = $i;
						if($i == $pagina){?>
	    					<li class="page-item active" aria-current="page">
								<span class="page-link">
									<?php
										echo $i;
									?>
									<span class="sr-only">(current)</span>
								</span>
							</li>
						<?php } 
							else{
								if($i>=1 && $i<=15){?>
								<li class="page-item">
									<a class="page-link" href="?pagina=<?=$i?>">
									<?php	
										echo $i;
									}}?>
									</a>
								</li>
							<?php
					}	
				?>
				<li class="page-item">
					<a class="page-link" href="?pagina=<?=$pagina+1?>">
						Próximo
					</a>
				</li>
			</ul>
		</nav>

		<?php	
		if($qntTitulos>0){
			foreach ($listas2 as $lista2){?>
				<div class="card" style="width: 80vw; height: 18em; margin: .5em auto; padding: 1em;">
					<h5 class="card-header">Titulo: <?= $lista2['titulo']?> 
					<input type="hidden" name="id_titulo" value="<=?$lista2['id_titulo']?>">
					<?php if (userlog() == $user_drt){?>
						<a href="../page/atualizarMonografia.php?id_titulo=<?=$lista2['id_titulo']?>"><button class="btn btn-primary" style="float: right;"> Atualizar </button></a> 
					<?php }?></h5>
					<h6>Autor: <?= $lista2['nome_autor']?></h6>
				
					<h6>Ano: <?= $lista2['ano']?> </h6>
					<h6>Curso: <?= $lista2['disciplina']?> </h6>
					<h6>Palavras chaves: <?= $lista2['pl_primeira']?> ; <?= $lista2['pl_segunda']?> ; <?= $lista2['pl_terceira']?></h6>
					<h6>Número de Classificação: <?= $lista2['num_classificacao']?></h6>
					<?php if($list2['fk_arquivo'] = $lista2['id_arquivo']){?>
					<h6>Arquivo:
					<a href="../perfil/openMonografia.php?file=<?=$lista2['id_titulo']?>" target="_blank">
						<label><?= $lista2['nome']?></label>
					</a></h6>
					<?php }else{?>
						<h6>Arquivo: Não existe, informe o <b>número de classificação</b> no balcão de atendimento</h6>
					<?php }?>	
				</div>	
		<?php	}
		}?>	

		<nav aria-label="..." style="width: 50vw; height: 5vh; margin: .5em 2em;">
			<ul class="pagination pagination">
				<?php if($pagina == 1 ){?>
					<li class="page-item" >
						<a class="page-link">
							Anterior	
						</a>
					</li>		
				<?php } 
					else{?>
						<li class="page-item" >
							<a class="page-link" href="?pagina=<?=$pagina-1?>">
								Anterior	
							</a>
						</li>	
				<?php		
					}
					
		
					for ($i=1; $i <= $total ; $i++) {
						$cont = $i;
						if($i == $pagina){?>
	    					<li class="page-item active" aria-current="page">
								<span class="page-link">
									<?php
										echo $i;
									?>
									<span class="sr-only">(current)</span>
								</span>
							</li>
						<?php } 
							else{
								if($i>=1 && $i<=15){?>
								<li class="page-item">
									<a class="page-link" href="?pagina=<?=$i?>">
									<?php	
										echo $i;
									}}?>
									</a>
								</li>
							<?php
					}	
				?>
				<li class="page-item">
					<a class="page-link" href="?pagina=<?=$pagina+1?>">
						Próximo
					</a>
				</li>
			</ul>
		</nav>
	</div>



