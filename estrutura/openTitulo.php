<?php
	$contTitulos = contTitulos($connect, $nome_pesquisa);
	$titulos = buscaTituloLimit($connect, $nome_pesquisa, $inicio, $qntExibir);
	$totalTitulos = ceil($contTitulos/$qntExibir);

	foreach ($titulos as $titulo){?>	

	<div class="card" style="width: 80vw; height: 18em; margin: .5em auto; padding: 1em;">
		<h4 class="card-header">Titulo: <?= $titulo['titulo']?> 
			<?php if (userlog() == $user_drt){?>
				<a href="../page/atualizarMonografia.php?id_titulo=<?=$titulo['id_titulo']?>"><button class="btn btn-primary" style="float: right;"> Atualizar </button></a> 
			<?php }?>
		</h4>
		<h6>Autor: <?= $titulo['nome_autor']?></h6>
		<h6>Ano: <?= $titulo['ano']?> </h6>
		<h6>Curso: <?= $titulo['disciplina']?> </h6>
		<h6>Palavras chaves: <?= $titulo['pl_primeira']?> ; <?= $titulo['pl_segunda']?> ; <?= $titulo['pl_terceira']?></h6>
		<h6>Número de Classificação: <?= $titulo['num_classificacao']?></h6>
		<?php if($titulo['fk_arquivo'] = $titulo['id_arquivo']){?>
		<h6>Arquivo:
		<a href="../perfil/openMonografia.php?file=<?=$titulo['id_titulo']?>" target="_blank">
			<label><?= $titulo['nome']?></label>
		</a></h6>
		<?php }else{?>
			<h6>Arquivo: Não existe, informe o <b>número de classificação</b> no balcão de atendimento</h6>
		<?php }?>	
	</div>
<?php } ?>
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
							<a class="page-link" href="?tipo_pesquisa=<?=$tipo_pesquisa?>
								&nome_pesquisa=<?=$nome_pesquisa?>
								&pagina=<?=$pagina-1?>">
								Anterior	
							</a>
						</li>	
				<?php		
					}

				for ($i=1; $i <= $totalTitulos ; $i++){
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
							<li class="page-item"  aria-current="page">
								<a class="page-link" href="?tipo_pesquisa=<?=$tipo_pesquisa?>
									&nome_pesquisa=<?=$nome_pesquisa?>
									&pagina=<?=$i?>">
									<?php
										echo $i;
									}}?>
								</a>
							</li>	
						<?php 
				 }
				 if($pagina == $cont){?>
				 	<li class="page-item" >
						<a class="page-link">
							Próxima	
						</a>
					</li>	
				 <?php }else{?>
				 	<li class="page-item">
				 		<a class="page-link" href="?tipo_pesquisa=<?=$tipo_pesquisa?>
									&nome_pesquisa=<?=$nome_pesquisa?>
									&pagina=<?=$pagina+1?>">
				 			Próximo
				 		</a>
				 	</li>
				<?php }?>
			</ul>
		</nav>			
	