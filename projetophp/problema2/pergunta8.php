<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pergunta 8</title>
	<?php 

session_start();
	$_SESSION['resp7'] = $_POST['resp7'];
	
	if ($_SESSION['resp7'] == 2) {
		$_SESSION["ponto"] ++;
	}


	 ?>
</head>
<body>
<form name="pergunta8" method="post" action="pergunta9.php">
	<h1>Pergunta numero 8</h1> <br>
	<h2>Pergunta aqui</h2><br>
	<p>1-85</p>
	<p>2-45</p>
	<p>3-30</p>
	<p>4-21</p>
	Resposta:
	<input type="number" name="resp8">
 </form>
</body>
</html>