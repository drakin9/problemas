<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php 

session_start();
	$_SESSION['resp2'] = $_POST['resp2'];
	
	if ($_SESSION['resp2'] == 4) {
		$_SESSION["ponto"] ++;
	}


	 ?>

</head>
<body>

<form name="pergunta3" method="post" action="pergunta4.php">
	<h1>Pergunta numero 3</h1> <br>
	<h2>QUal o valor próximo de PI?</h2><br>
	<p>1-4,14</p>
	<p>2-3,14</p>
	<p>3-3,12</p>
	<p>4-2,13</p>
	Resposta:
	<input type="number" name="resp3">

<form>
</body>
</html>