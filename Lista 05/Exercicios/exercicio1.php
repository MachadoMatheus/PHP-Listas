<!DOCTYPE html>
<html>
<head>
	<title>Exercício 1</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<?php 
	/*1. Escreva um programa para calcular e exibir na tela o fatorial de um
	número. Esse número deverá ser informado pela URL do navegador.*/

		$n = $_GET["n"];

		$nFatorial = 1;

		if ($n == 0) {
			echo "$n! = 1 = 1.";
		} elseif ($n < 0) {
			echo "$n! não existe porque $n é menor do que zero!!";
		} else {
			echo "$n! = ";
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