<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pergunta 5</title>
	<?php 

session_start();
	$_SESSION['resp4'] = $_POST['resp4'];
	
	if ($_SESSION['resp4'] == 3) {
		$_SESSION["ponto"] ++;
	}


	 ?>
</head>
<body>
<form name="pergunta5" method="post" action="pergunta6.php">
	<h1>Pergunta numero 5</h1> <br>
	<h2>E quem ganhou a Libertadores em 2012?</h2><br>
	<p>1-Corinthians</p>
	<p>2-Botafogo</p>
	<p>3-Flamengo</p>
	<p>4-Cruzeiro</p>
	Resposta:
	<input type="number" name="resp5">

<form>
</body>
</html>