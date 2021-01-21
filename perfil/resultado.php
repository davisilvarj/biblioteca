<?php
	include "../estrutura/head.php";
	include "../regras/acessoUser.php";
	include "../banco/acessoBanco.php";

	$drt = userlog();

	$users = userLocal($connect, $drt);

	foreach($users as $user){
		$user_drt = $user['drt'];
	}
?>
<div style="display: contents; position: relative;">	
<?php
verifyUser();
	
	if(userIsLog()){
		switch (userlog()) {
			case $user_drt:
					include "../estrutura/menu.php";
					include "../estrutura/lista.php";
				break;
			
			default:
					include "../estrutura/menu.php";
					include "../estrutura/lista.php";
				break;
		}
	}

?>

