<!DOCTYPE html>
<html>
<head>
	<title>Exercício 7</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<?php 
/*8. Escreva um programa que verifique qual de 3 números quaisquer é o maior. Imprima o resultado na tela.*/
	$tam = 3;
	for ($i=0; $i < $tam; $i++) { 
		$numeros[$i] = rand(12,27);
	}

	$maiorNumero = $numeros[0];
	for ($i=1; $i < $tam; $i++) { 
		if ($numeros[$i] >$maiorNumero) {
			$maiorNumero = $numeros[$i];
		}
	}

	echo "O maior número no vetor [";

	for ($i=0; $i < $tam; $i++) { 
		if ($i == $tam - 1) {
			echo "$numeros[$i]]";
		} else {
			echo "$numeros[$i], ";
		}
	}

	echo " é o $maiorNumero!!!";
?>
</body>
</html>