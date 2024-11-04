<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pergunta 6 </title>
	<?php 

session_start();
	$_SESSION['resp5'] = $_POST['resp5'];
	
	if ($_SESSION['resp5'] == 1) {
		$_SESSION["ponto"] ++;
	}


	 ?>
</head>
<body>
<form name="pergunta6" method="post" action="pergunta7.php">
	<h1>Pergunta numero 6</h1> <br>
	<h2>Quem matou Adolf Hitler?</h2><br>
	<p>1-Adolf Hitler</p>
	<p>2-Stalin</p>
	<p>3-Benito Mussolini</p>
	<p>4-Abraham Lincoln</p>
	Resposta:
	<input type="number" name="resp6">
</body>
</html>