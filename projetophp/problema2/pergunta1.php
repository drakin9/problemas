<!DOCTYPE html>
<html>
<head>
	<title>Pergunta1</title>
<?php 
	session_start();
	$_SESSION['nome'] = $_POST['nome'];
	
 ?>
</head>
<body>

<form name="pergunta1" method="post" action="pergunta2.php">
	<h1>Pergunta numero 1</h1> <br>
	<h2>Quanto é 80+5?</h2><br>
	<p>1-85</p>
	<p>2-45</p>
	<p>3-30</p>
	<p>4-21</p>

	Resposta:
	<input type="number" name="resp1">

<form>
</body>
</html>