<!DOCTYPE html>
<html>
<head>
	<title>Else if</title>
</head>
<body>

		<?php
			// Verifica pela primeira vez o valor da chave passado no array "$_POST"
			if (isset($_POST["idade"])) {
				//Atribue uma variavel com o valor capturado no campo "idade"
				$idade = $_POST["idade"];
			}
			// Nesse primeiro if eu digo que se a idade digitada for maior ou = a 18
			// e igual a 59, então imprima na tela: Adulto
			if ($idade >=18 and $idade == 59) { // correto também -> if ($idade >=18 and $idade < 60)
				echo "Adulto";
			// No elseif eu digo que se a idade digitada for maior ou = a 60,
			// então imprima na tela: Terceira Idade
			}elseif ($idade >=60) {
				echo "Terceira Idade";
			//Quando qualquer valor digitado for menor que 18, retorna: Menor idade
			} else {
				echo "Menor idade";
			}

		?>

	 	<form method="POST">
	 		<input type="text" name="idade">
	 		<button type="submit">Verifica</button>
	 	</form>

</body>
</html>