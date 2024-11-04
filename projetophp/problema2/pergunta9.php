<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pergunta 9</title>
	<?php 

session_start();
	$_SESSION['resp8'] = $_POST['resp8'];
	
	if ($_SESSION['resp8'] == 2) {
		$_SESSION["ponto"] ++;
	}


	 ?>
</head>
<body>
<form name="pergunta9" method="post" action="pergunta10.php">
	<h1>Pergunta numero 9</h1> <br>
	<h2>Pergunta aqui</h2><br>
	<p>1-85</p>
	<p>2-45</p>
	<p>3-30</p>
	<p>4-21</p>
	Resposta:
	<input type="number" name="resp9">
 </form>
</body>
</html>