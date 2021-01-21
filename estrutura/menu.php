<div class="card menu bg-info text-white">
	<div class="card-header">
		<h4>
			Consulta BIB 
		</h4>
	</div>
	<div class="card-body bg-light text-dark">
		<nav class="navbar nav-tabs">
			<ul class="nav flex-column">
				<?php if (userlog() == $user_drt){?>
					<li class="nav-item"> <a href="../perfil/registroMonografia.php"> Registrar </a> </li>
				<?php }?>		
				 <li class="nav-item"> <a href="../perfil/resultado.php"> Lista </a> </li>
				 <li class="nav-item"> <a href="../regras/logout.php"> Sair </a></li>
			</ul>
		</nav>
		<form action="../page/pesquisaMonografia.php" method="request">
			<nav class="navbar">
				<ul class="nav flex-column">
					<select name="tipo_pesquisa" id="tipo_pesquisa" onchange="habilitar(this)" required>
						<option> Consulta por: </option>
						<option value="titulo"> Titulo </option>
						<option value="autor"> Autor </option>
						<option value="curso"> Curso </option>
						<option value="palavra"> Palavra Chave </option>
					</select>
					
					<li id="exp_tipo">
						<input class="form-control" type="text" name="nome_pesquisa">
					</li>
					<select id="exp_cursos" name="curso_pesquisa">
						<option> --- </option>
						<option value="1"> Administração </option>
						<option value="2"> Ciências Contábeis </option>
						<option value="3"> Ciências Econômicas </option>
						<option value="4"> Direito </option>
					</select>
				</ul>
				<button class="btn btn-primary"> OK </button>
			</nav>
		</form>
		
	</div>
	<script type="text/javascript">
		$('#exp_cursos').hide();
		
		function habilitar(obj){
		 	var i = obj.selectedIndex; 
	 		var j = obj.options[i].value; 

	 		if(j=='curso'){
	 			document.getElementById('exp_cursos').style.display="block"; 
	 			document.getElementById('exp_tipo').style.display="none";
	 		}else{
	 			document.getElementById('exp_cursos').style.display="none"; 
	 			document.getElementById('exp_tipo').style.display="block";
	 		}

		}

	</script>
</div>
