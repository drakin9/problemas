<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<?php 
	session_start();
		$form = '<form name="inicio"method="post" action="tela2.php">
				Login: <br>
				<input type="text" name="login"><br>
				Senha: <br>
				<input type="password" name="senha">
				<input type="submit" name="enviar">
			</form>';

	if (isset($_SESSION['nome'])){
		echo "Usuario logado: ".$_SESSION['nome'];
		$form = "";
	}


	 ?>
</head>
<body>

	<?php

	 echo $form;  

	 ?>

<!-- <form name="inicio"method="post" action="tela2.php">
	Login: <br>
	<input type="text" name="login"><br>
	Senha: <br>
	<input type="password" name="senha">
	<input type="submit" name="enviar">
</form> -->
</body>
</html>