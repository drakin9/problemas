<!DOCTYPE html>
<html>
<head>
	<title>Comparação dos Dados</title>

	<?php 
		session_start();
		$_SESSION["nome2"] = $_POST["nome2"];
		$_SESSION["idade2"] = $_POST["idade2"];
		$_SESSION["peso2"] = $_POST["peso2"];
		$_SESSION["altura2"] = $_POST["altura2"];

		if ($_SESSION["altura"] > $_SESSION["altura2"]) {
			echo "O mais alto é " , $_SESSION["nome"], "<br>" ;

		} elseif ($_SESSION["altura2"] > $_SESSION["altura"]) {
			echo "O mais alto é " , $_SESSION["nome2"],"<br>";

		} else {
			echo "Ambos têm a mesma altura <br>" ;
		}



		if ($_SESSION["idade"] > $_SESSION["idade2"]) {
			echo "O mais velho é " , $_SESSION["nome"],"<br>";

		} elseif ($_SESSION["idade2"] > $_SESSION["idade"]) {
			echo "O mais velho é " , $_SESSION["nome2"],"<br>";
		}  else {
			echo "Ambos têm a mesma idade <br>";
		}



			if ($_SESSION["peso"] > $_SESSION["peso2"]) {
			echo "O mais pesado é " , $_SESSION["nome"],"<br>" ;

		} elseif ($_SESSION["peso2"] > $_SESSION["peso"]) {
			echo "O mais pesado é " , $_SESSION["nome2"],"<br>";

		} else {
			echo "Ambos têm o mesmo peso <br>";
		}

		
		
	 ?>
</head>
<body>

</body>
</html>