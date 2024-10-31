<!DOCTYPE html>
<html>
<head>
	<title>Formulário 02</title>
	<?php 
		session_start();
		$_SESSION["nome"] = $_POST["nome"];
		$_SESSION["idade"] = $_POST["idade"];
		$_SESSION["peso"] = $_POST["peso"];
		$_SESSION["altura"] = $_POST["altura"];
		
	 ?>
</head>
<body>
	<h3>Bem Vindo! Preencha com seus dados</h3>
	<form name="cadastro" method="post" action="sessao01_ex01.php">
		Nome:<br>
		<input type="text" name="nome2"><br><br>
		Idade:<br>
		<input type="number" name="idade2"><br><br>
		Peso:<br>
		<input type="text" name="peso2"><br><br>
		Altura:<br>
		<input type="text" name="altura2"><br><br>
		<input type="submit" name="enviar" value="Enviar">
		<input type="reset" name="limpar" value="Limpar">
	</form>
</body>
</html>