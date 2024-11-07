<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<?php
	session_start();
	$_SESSION['login'] = $_POST['login'];
	$_SESSION['senha'] = $_POST['senha'];
	
	
	if($_SESSION['login'] == 'admin' && $_SESSION['senha'] == 1234){
		$_SESSION['nome'] = "Administrador";
		header("Location: valida.php");
		exit;
	}elseif ($_SESSION['login'] == 'visit' && $_SESSION['senha'] == 12345) {
		$_SESSION['nome'] = "Visitante";
		header("Location: valida.php")	;
		exit;
	}elseif ($_SESSION['login'] == 'colab' && $_SESSION['senha'] == 123456) {
		$_SESSION['nome'] = "Colaborador";
		header("Location: valida.php")	;
		exit;
	}
	

	
		


	?>
</head>
<body>

</body>
</html>