<!DOCTYPE html>
<html>
<head>
	<title>Formulario - Capturando Valores</title>
</head>
<body>

	<h1>Numero Par ou Impar</h1>
	
	<?php 
		if (isset($_POST["num"])) {
		 	echo $_POST["num"];
		 	echo "<br/>";
		 	$num = $_POST["num"];

		 	if ($num % 2 == 0) {
		 		echo "É um numero par";
		 	} else{
		 		echo "É um numero impar";
		 				 	}
		 	}
	?>
<form method="post">
	<input type="text" name="num">
	<button type="submit">Enviar</button>
</form>

</body>
</html>