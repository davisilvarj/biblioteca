<?php
	include "../estrutura/head.php";

	include "../banco/connect.php";
	include "../banco/buscarDados.php";
 
	
	
	$usuarios = buscarUsuarios($connect);
?>

<div class="areageral">
	<div class="controle" >
		<div class="form-group">
			<?php 
			
			foreach ($usuarios as $usuario){?>
			<form action="../regras/atualizaAdmins.php" method="post"  enctype="multipart/form-data">
				<div class="card text-left">
					<div class="card-header"> 		
					</div>
					<div class="card-body">
						<input type="hidden" name="id" value="<?= $usuario['id'] ?>">
						<label> Nome: </label>
						<input class="form-control" type="text" name="nome" value="<?=$usuario['nome']?>" />
						<label> Drt: </label>
						<input class="form-control" type="text" name="drt" value="<?=$usuario['drt']?>" />
						<label> E-mail: </label>
						<input class="form-control" type="text" name="email" value="<?=$usuario['email']?>" />
						<label> Função: </label>
						<input class="form-control" type="text" name="funcao" value="<?=$usuario['funcao']?>" />
					</div>
					<div class="controle_button form-row">
						<button class="btn btn-primary col-2" name="button" value="atualiza" style="margin: .5em; position:  relative; float: right;">Atualizar</button>	
						<button class="btn btn-primary col-2" name="button" value="deleta" style="margin: .5em; position:  relative; float: right;">Deletar</button>
					</div>		
				</div>	
			</form>
			<?php } ?>

			<button class="btn btn-primary col-2" data-toggle="modal" data-target="#myModal" style="margin: .5em; position:  relative; float: right;">Inserir Novo Colaborador</button>
		
			<a href="../regras/logout.php"><button class="btn btn-primary col-2" data-toggle="modal" data-target="#myModal" style="margin: .5em; position:  relative; float: right;">Sair</button>
	<div class="modal" id="myModal">
		<div class="modal-dialog">
		  <div class="modal-content"  style="width: 30vw;">   
		    <!-- Modal Header -->
		    <div class="modal-header">
		      <button type="button" class="close" data-dismiss="modal">×</button>
		    </div>
		    
		    <!-- Modal body -->
		    <div class="modal-body">
		      	<form action="../regras/regFuncionario.php" method="post"  enctype="multipart/form-data">
		      		<div class="card text-left">
					<div class="card-header">
						<h3>Novo Usuário</h3> 		
					</div>
					<div class="card-body">
						<input type="hidden" name="id" value="<?= $usuario['id'] ?>">
						<label> Nome: </label>
						<input class="form-control" type="text" name="nome" />
						<label> Drt: </label>
						<input class="form-control" type="text" name="drt"  />
						<label> E-mail: </label>
						<input class="form-control" type="text" name="email"/>
						<label> Função: </label>
						<input class="form-control" type="text" name="funcao" />
					</div>
					<div class="controle_button form-row">
						<button class="btn btn-primary col-2" name="button" style="margin: .5em; position:  relative; float: right;">OK</button>
					</div>		
				</div>	
		      	</form>

		    </div>
		  </div>
		</div>
	</div>
		</div>
	</div>	
</div>