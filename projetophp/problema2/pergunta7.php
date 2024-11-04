<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pergunta 7</title>
	<?php 

session_start();
	$_SESSION['resp6'] = $_POST['resp6'];
	
	if ($_SESSION['resp6'] == 1) {
		$_SESSION["ponto"] ++;
	}


	 ?>
</head>
<body>
<form name="pergunta7" method="post" action="pergunta8.php">
	<h1>Pergunta numero 7</h1> <br>
	<h2>Quem criou a Apple?</h2><br>
	<p>1-Mark Zuckeberg</p>
	<p>2-Steve Jobs</p>
	<p>3-Elon Musk</p>
	<p>4-Jair Messias Bolsonaro</p>
	Resposta:
	<input type="number" name="resp7">
 </form>
</body>
</html>