<!DOCTYPE html>
<html>
<head>
	<title>Number Par ou Impar</title>
</head>
<body>

<?php
	// Verifica se a chave "num" está contida no array
	if (isset($_POST["num"])) {
		// Imprima o valor "num" na tela
		echo $_POST["num"];
	}

	// Declaro uma variavel com o valor capturado no paramento "num"
		$num = $_POST["num"];
		echo "<br/>";
 	// Se o numero capturado, sua dizima for = 0, então o mesmo é par, se não, é impar
	if ($num % 2 == 0) {
		echo "Esse numero é par";
	}else{
		echo "Esse numero é impar";
	}

?>
	<!-- Declaro o metodo "post" no formulario e o input recebe name="num" que é o nome dado ao paramento em php -->

	<form method="post">
		<input type="text" name="num">
		<button type="submit">Verificar</button>
	</form>

</body>
</html>