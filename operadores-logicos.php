<?php
/*
*	@link: http://php.net/manual/pt_BR/language.operators.logical.php
*
*	$a and $b	E	Verdadeiro (TRUE) se tanto $a quanto $b são verdadeiros.
*	$a or $b	OU	Verdadeiro se $a ou $b são verdadeiros.
*	$a xor $b	XOR	Verdadeiro se $a ou $b são verdadeiros, mas não ambos.
*	! $a	NÃO	Verdadeiro se $a não é verdadeiro.
*	$a && $b	E	Verdadeiro se tanto $a quanto $b são verdadeiros.
*	$a || $b	OU	Verdadeiro se $a ou $b são verdadeiros.
*/

$num = 150;

if (($num == 50)&&($num < 100)){
	echo "aberto";
}else if (($num > 100)&&($num == 150)) {
	echo "fechado";
}
?>