<!DOCTYPE html>
<html>
<head>
	<title>Exercício 10</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<?php 
/*12) Escreva um programa que calcule e exiba na tela uma tabela
contendo a soma dos números pares entre 10 e 80. */
	$soma = 0;

	for ($i=10; $i <= 80; $i++) { 
		if ($i % 2 == 0) {
			$soma += $i;
		}
	}

	echo "A soma dos números pares entre 10 e 80 é <u>$soma</u>!!!<br>";
?>
</body>
</html>