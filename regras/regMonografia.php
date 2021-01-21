<?php
	include "../banco/connect.php";
	include "../banco/buscarDados.php";
	include "../banco/inserirDados.php";

	$autor 				= $_POST['autor'];
	$titulo 			= $_POST['titulo'];
	$num_classificacao	= $_POST['num_classificacao'];
	$curso 				= $_POST['disciplina'];
	$ano 				= $_POST['ano'];
 
 	$pl_primeira 	= $_POST['pl_primeira'];
 	$pl_segunda 	= $_POST['pl_segunda'];
 	$pl_terceira 	= $_POST['pl_terceira'];

 	$arq_existe		= $_POST['arq_existe'];
 	
 	if($arq_existe == 'true'){
 		$arq_existe = "1";

			if(isset($_FILES['arquivo'])){
			$nome = $_FILES['arquivo']['name'];
			$point = substr($nome, -4,1);

			if($point == '.'){
				$extencao = strtolower(substr($nome, -4));
			}else{
				$extencao = strtolower(substr($nome, -5));
			}
			$novo_nome = md5(time()).$extencao;

			$local = '../upload/';

			if(move_uploaded_file($_FILES['arquivo']['tmp_name'], $local.$novo_nome)){
				$img = mysqli_query($connect,"INSERT INTO arquivo (nome, doc) values ('{$nome}','{$novo_nome}')");
			}else{
				echo "Algum erro ocorreu";
			}
		}
 	}else{
 		$arq_existe = "0";
		$fk_arquivo = "0";
 	}

 	if(inserirAutor($connect, $autor, $fk_titulo) and 
		inserirTitulo($connect, $titulo, $num_classificacao, $ano, $curso, $arq_existe, $fk_arquivo) and
		inserirPalavra($connect, $pl_primeira, $pl_segunda, $pl_terceira, $fk_titulo))
		{?>
			<p class="alert-success">
	    		Monografia /TCC  <?= $titulo;?> registrada com sucesso. 
	   		</p>
			<?php include "../perfil/registroMonografia.php"; 
		}else {
			$msg = mysqli_error($connect);
			echo $msg;
			?>
			<p class="alert-danger">
	     	   Erro no registro da Monografia / TCC!
	   		</p>	
			<?php include "../perfil/registroMonografia.php";
		}

 	/*if(array_key_exists('arq_existe', $_POST)){
		$arq_existe = "1";

			if(isset($_FILES['arquivo'])){
			$nome = $_FILES['arquivo']['name'];
			$point = substr($nome, -4,1);

			if($point == '.'){
				$extencao = strtolower(substr($nome, -4));
			}else{
				$extencao = strtolower(substr($nome, -5));
			}
			$novo_nome = md5(time()).$extencao;

			$local = '../upload/';

			if(move_uploaded_file($_FILES['arquivo']['tmp_name'], $local.$nome)){
				$img = mysqli_query($connect,"INSERT INTO arquivo (nome, doc) values ('{$nome}','{$novo_nome}')");
			}else{
				echo "Algum erro ocorreu";
			}
		}

	}else{
		$arq_existe = "0";
		$fk_arquivo = "0";
	}

	if(inserirAutor($connect, $autor, $fk_titulo) and 
		inserirTitulo($connect, $titulo, $num_classificacao, $ano, $curso, $arq_existe, $fk_arquivo) and
		inserirPalavra($connect, $pl_primeira, $pl_segunda, $pl_terceira, $fk_titulo))
		{?>
			<p class="alert-success">
	    		Monografia /TCC  <?= $titulo;?> registrada com sucesso. 
	   		</p>
			<?php include "../perfil/registroMonografia.php"; 
		}else {
			$msg = mysqli_error($connect);
			echo $msg;
			?>
			<p class="alert-danger">
	     	   Erro no registro da Monografia / TCC!
	   		</p>	
			<?php include "../perfil/registroMonografia.php";
		}
*/

