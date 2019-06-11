<!DOCTYPE html>
<html>
<head>
	<title>Exercício 6</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<?php 
/*6) Escreva um programa para calcular o fatorial de um número inteiro
par, informado por URL. Caso o número informado seja ímpar, calcule
o fatorial do primeiro número par anterior ao número ímpar informado.*/
		$n1 = $_GET["n1"];
		
		if ($n1 % 2 == 0) {
			$n = $n1;
		} else {
			$n = $n1 - 1;
		}

		$nFatorial = 1;
		if ($n == 0) {
			echo "Número na URL = $n1 <br> $n! = 1 = 1.";
		} elseif ($n < 0) {
			echo "$n! não existe porque $n é menor do que zero!!";
		} else {
			echo "Número na URL = $n1 <br> $n! = ";
		for ($i=$n; $i > 0; $i--) { 
			if ($i == 1) {
				echo "1 = $nFatorial.";
			} else {
				echo "$i * ";
			}
			$nFatorial *= $i; 
		}
		}
	?>

</body>
</html>