<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pergunta 10</title>
	<?php 

session_start();
	$_SESSION['resp9'] = $_POST['resp9'];
	
	if ($_SESSION['resp9'] == 2) {
		$_SESSION["ponto"] ++;
	}


	 ?>
</head>
<body>
<form name="pergunta10" method="post" action="tela_final.php">
	<h1>Pergunta numero 10</h1> <br>
	<h2>Pergunta aqui</h2><br>
	<p>1-85</p>
	<p>2-45</p>
	<p>3-30</p>
	<p>4-21</p>
	Resposta:
	<input type="number" name="resp10">
 </form>
</body>
</html>