<?php
	include ("head.php");
	include ("../regras/acessoUser.php");

?>

<div class="painel">
	<div class="painel-log card col-md-5">
			<?php  mostraAlerta("success"); ?>
    		<?php mostraAlerta("danger"); ?>
		<div class="card-header">
			<h4>CONSULTA BIB MACKENZIE</h4>
		</div>
		<div class="card-body">
			<form class="form-row" action="../regras/controleAcesso.php" method="post">
				<label class="col-md-2" >DRT: </label>
				<input class="form-control col-md-10" type="text" name="drt">
				<label class="col-md-2" >Senha: </label>
				<input class="form-control col-md-10" type="password" name="pass">
				<button type="submit" class="btn btn-primary"> Entrar </button>
			</form>
		</div>
	</div>
</div>