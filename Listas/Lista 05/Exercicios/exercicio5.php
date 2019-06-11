<!DOCTYPE html>
<html>
<head>
	<title>Exercício 5</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<?php 
/*5) Escreva um programa que receba 2 números inteiros informados pela
URL e exiba em uma tabela, o fatorial do maior número informado
(cada número em uma linha da tabela).*/
		$vetor[] = $_GET["n1"];
		$vetor[] = $_GET["n2"];

		if ($vetor[0] > $vetor[1]) {
			$n = $vetor[0];
		} else {
			$n = $vetor[1];
		}

		$nFatorial = 1;
		echo "<table>";
		for ($i=$n; $i > 0; $i--) { 
			$nFatorial *= $i;
			echo "
				<tr>
				<td>".$i."º</td>
				<td>".$nFatorial."</td>
				</tr>
			";
		}	
		echo "</table>";
	?>

</body>
</html>