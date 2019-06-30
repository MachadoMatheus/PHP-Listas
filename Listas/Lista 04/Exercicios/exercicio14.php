<!DOCTYPE html>
<html>
<head>
	<title>Exercício 13</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<?php 
/*14. Uma matriz A de 2 x 3 contém os seguintes elementos em suas respectivas posições: [1,1] = 2, [1,2] = 5, [1,3] = 6, [2,1] = 4, [2,2] = 3, [2,3] = 8. Escreva um programa que coloque em um vetor unidimensional o conteúdo da matriz A que tiver um número ímpar.*/
	$matriz[0][0] = 2;
	$matriz[0][1] = 5;
	$matriz[0][2] = 6;
	$matriz[1][0] = 4;
	$matriz[1][1] = 3;
	$matriz[1][2] = 8;

	foreach ($matriz as $key => $value) {
		foreach ($value as $chave => $valor) {
			if ($valor % 2 == 1) {
				$uni[] = $valor;
			}
		}
	}

	print_r($uni);
?>
</body>
</html>