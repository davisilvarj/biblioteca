<?php
	include "../regras/acessoUser.php";	
	
	$drt = userlog();

	if($drt == 'dti'){
		include "controlador.php";
		die();
	}else{
			include "../banco/connect.php";
			include "../banco/buscarDados.php";
	$users = userLocal($connect, $drt);
			

		foreach($users as $user){
			$user_drt = $user['drt'];
		}	

?>
<div style="display: contents; position: relative;">	
<?php
	

	/*if(userlog()==$drt){
		include "../estrutura/head.php";
		include "../estrutura/menu.php";
		die();
	}

	if(userlog()==$user_drt){
		include "../estrutura/head.php";
		include "../estrutura/menu.php";
		include "../estrutura/formulario.php";
	}*/
verifyUser();
	
	if(userIsLog()){
	
		switch (userlog()){
			case $drt:
					include "../estrutura/head.php";
					include "../estrutura/menu.php";
				break;
			
			default:
				include "../estrutura/head.php";
				include "../estrutura/menu.php";
				include "../estrutura/formulario.php";	
			break;
		}
	}
}
?>
