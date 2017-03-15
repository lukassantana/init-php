<?php
// Declara variavel 
$val1 = "8";
$val2 = "5.5";
$resul = $val1 / $val2;
$mod = $val1 % $val2;
// Imprima de forma concatenada "." os valores declarados
echo $val1 ."dividido por" . $val2 . "=" . $resul;

echo "\n";
// Concatenando o modulo da operação entre val1 e val2
echo "o modulo da divisão é:" . $mod;

echo "\n";
// Imprimindo modulo entre o valor float
echo fmod(7, 3.3);


?>
