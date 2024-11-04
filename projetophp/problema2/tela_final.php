<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tela final</title>
	<?php 

session_start();
	$_SESSION['resp10'] = $_POST['resp10'];
	
	if ($_SESSION['resp10'] == 2) {
		$_SESSION["ponto"] ++;
	}


	 ?>
</head>
<body>
	<h1>Quiz finalizado</h1>
	<?php echo "Voce acertou: ".$_SESSION['ponto']  ?>
	<form name="tela_final" method="post" action="tela_inicial.php">
		<input type="submit" name="">
	</form>
</body>
</html>