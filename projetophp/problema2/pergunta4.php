<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php 

session_start();
	$_SESSION['resp3'] = $_POST['resp3'];
	
	if ($_SESSION['resp3'] == 2) {
		$_SESSION["ponto"] ++;
	}


	 ?>
</head>
<body>
<form name="pergunta4" method="post" action="pergunta5.php">
	<h1>Pergunta numero 4</h1> <br>
	<h2>Quem ganhou o Campeonato Paulista em 2019?</h2><br>
	<p>1-Juventude</p>
	<p>2-Novorizontino</p>
	<p>3-Corinthians</p>
	<p>4-Santos</p>
	Resposta:
	<input type="number" name="resp4">

<form>
</body>
</html>