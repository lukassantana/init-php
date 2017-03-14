<!DOCTYPE html>
<html>
<head>
	<title>Formulario - Capturando Valores</title>
</head>
<body>

<h1>Capturando Valores</h1>
	<?php
		if (isset($_POST["produto"])) {
			echo $_POST ["produto"];
		}
	?>

<form method="post">
	<br/>
	<input type="text" name="produto"><br/>
	<input type="text" name="preco">
	<br/>
	<button type="submit" value="Enviar">Enviar</button>

</form>

</body>
</html>