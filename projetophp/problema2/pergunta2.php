<!DOCTYPE html>
<html>
<head>
	<title>Pergunta2</title>
	
</head>
<body>
<?php
session_start();
	$_SESSION["ponto"] =0 ;
	$_SESSION['resp1'] = $_POST['resp1'];
	if ($_SESSION['resp1'] == 1) {
		$_SESSION['ponto'] ++;

	}
	
  ?>
	
	


	<form name="pergunta2" method="post" action="pergunta3.php">
	<h1>Pergunta numero 2</h1> <br>
	<h2>Quanto é 77 + 33?</h2><br>
	<p>1-100</p>
	<p>2-120</p>
	<p>3-106</p>
	<p>4-110</p>
	Resposta:
	<input type="number" name="resp2">

<form>
</body>
</html>