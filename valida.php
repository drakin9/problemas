<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bem vindo</title>

	<?php 
	session_start();
	echo "Seja bem vindo ". $_SESSION['nome'];







	 ?>
</head>
<body>
<form name="sair" method="post" action="sair.php">
	<input type="submit" name="sair">
</form>
</body>
</html>