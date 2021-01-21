<div class="areageral">
	<div class="areaformulario" >
		<div class="card form">
			<form action="../regras/regMonografia.php" method="post" enctype="multipart/form-data">
				<div class="card text-left" >
					<div class="card-header"> 
						<h3 class="card-title">Informações da Monografia / TCC: </h3>
					</div>
					<div class="card-body">
						<label>Autor(a): </label>
						<input type="text" class="form-control" name="autor">
						<label>Título: </label>
						<input type="text" class="form-control" name="titulo">
						<label>Número de Classificação: </label>
						<input type="text" class="form-control" name="num_classificacao">												
						<label>Curso: </label>
						<select name="disciplina" class="form-control">
							<option> -- </option>
							<option name="disciplina" value="1"> Administração </option>
							<option name="disciplina" value="2"> Ciências Contábeis </option>
							<option name="disciplina" value="3"> Ciências Econômicas </option>
							<option name="disciplina" value="4"> Direito </option>
						</select>
						<label>Ano: </label>
						<input id="ano" type="text" class="form-control" name="ano">
						<label>Palavras Chaves: </label>
						<ul style="list-style: none;">
							<li>1º <input type="text" name="pl_primeira"></li>
							<li>2º <input type="text" name="pl_segunda"></li>
							<li>3º <input type="text" name="pl_terceira"></li>
						</ul>
						<label>Possui Arquivo para inserir:</label>	
						<ul style="list-style: none;">
							<li>
								<input type="radio" name="arq_existe" id="emp_arquivo" onclick="habilitar()" value="true"> Sim </li>
							<li>
								<input type="radio" name="arq_existe" id="esc_arquivo" onclick="habilitar()" value="false"> Não </li>
						</ul>
					</div>	
				</div>
				<div class="card text-left" name="exp_arquivo" id="exp_arquivo" style="margin-top: 1em;">
					<div class="card-header"> 
						<h3 class="card-title">Arquivo da Monografia: </h3>
					</div>
					<div class="card-body">
						 Arquivo: <input type="file" name="arquivo">  
					</div>	
				</div>
				<button type="submit" name="botao" class="btn btn-primary col-md-2" style="margin: 1em 2em;">Inserir</button>
			</form>
		</div>
	</div>	
</div>

<script>
    $(function() {
        $("#ano").datepicker({
            dateFormat: 'dd/mm/yy',
            dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
            dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
            dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
            monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
            monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez']
        });
    });
</script>

<script type="text/javascript">
	$('#exp_arquivo').hide();
	function habilitar(){
	 if(document.getElementById('emp_arquivo').checked){
            $('#exp_arquivo').show();
        }
        else {
           $('#exp_arquivo').hide();
        }

  	 if(document.getElementById('esc_arquivo').checked){
            $('#exp_arquivo').hide();
        }      
	}
</script>