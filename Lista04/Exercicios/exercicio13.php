<!DOCTYPE html>
<html>
<head>
	<title>Exercício 13</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<?php 
/*13. Em uma matriz quadrada de 2 X 2, há os seguintes valores em cada posição: [1,1] = 6, [1,2] = 3, [2,1] = 7 e [2,2] = 4. Escreva um programa para verificar quais são as posições da matriz que possui um valor cujo número é ímpar. Imprima na tela o resultado.*/
	$quadrada[0][0] = 6;
	$quadrada[0][1] = 3;
	$quadrada[1][0] = 7;
	$quadrada[1][1] = 4;

	for ($i=0; $i < count($quadrada); $i++) { 
		for ($j=0; $j < count($quadrada); $j++) { 
			if ($quadrada[$i][$j] % 2 == 1) {
				echo "O núemro na posição: [".($i + 1)."][".($j + 1)."] é ímpar e é igual a ".$quadrada[$i][$j]."<br>";
			} else {
				echo "O núemro na posição: [".($i + 1)."][".($j + 1)."] é par e é igual a ".$quadrada[$i][$j]."<br>";
			}
		}
	}
?>
</body>
</html>