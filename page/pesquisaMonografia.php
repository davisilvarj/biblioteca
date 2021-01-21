<?php
	include "../estrutura/head.php";
	include "../regras/acessoUser.php";
	include "../banco/acessoBanco.php";
?>
<div style="display: contents; position: relative;">	
<?php
	$drt = userlog();

	$users = userLocal($connect, $drt);

	foreach($users as $user){
		$user_drt = $user['drt'];
	}

	switch (userlog()){
		case $drt:
			include "../estrutura/menu.php";
			include "../regras/pesqMonografia.php";
		break;
		default:
			include "../estrutura/menu.php";
			include "../regras/pesqMonografia.php";
		break;
	}
	/*if(userlog()==$user_drt){
		include "../estrutura/menu.php";
		include "../regras/pesqMonografia.php";
	}if(userlog()==$drt){
		include "../estrutura/menu.php";
		include "../regras/pesqMonografia.php";
	}*/
?>

