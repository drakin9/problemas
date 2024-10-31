<!DOCTYPE html>
<html>
<head>
	<title>Pergunta1</title>
	<?
	session_start();
	$_SESSION['nome'] = $_POST['nome'];
	
	?>
</head>
<body>

<form name="pergunta1" method="post" action="pergunta2.php">
	<h1>Pergunta numero 1</h1> <br>
	<h2>Pergunta aqui</h2><br>
	Resposta:
	<input type="text" name="resp1">

<form>
</body>
</html>