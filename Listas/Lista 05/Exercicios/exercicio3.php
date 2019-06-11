<!DOCTYPE html>
<html>
<head>
	<title>Exercício 3</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body style="text-align: justify;">
	<?php 
/*3) Escreva um programa que liste na tela todos os números pares
menores que 250.*/

	for ($i=0; $i < 250; $i++) { 
		if ($i == 248) {
			echo "$i.";
		} elseif ($i % 2 == 0) {
			echo "$i, ";
		}
	}
	?>

</body>
</html>