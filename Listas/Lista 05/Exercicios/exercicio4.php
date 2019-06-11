<!DOCTYPE html>
<html>
<head>
	<title>Exercício 4</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<?php 
/*4) Escreva um programa que receba 4 números inteiros informados pela
URL, armazene os valores em um vetor e exiba na tela o conteúdo do
vetor.*/
		$vetor[] = $_GET["n1"];
		$vetor[] = $_GET["n2"];
		$vetor[] = $_GET["n3"];
		$vetor[] = $_GET["n4"];


		echo "Vetor = [";
		foreach ($vetor as $key => $value) {
			if ($key == count($vetor) - 1) {
				echo "$value]";
			} else {
				echo "$value, ";
			}
		}
	?>

</body>
</html>