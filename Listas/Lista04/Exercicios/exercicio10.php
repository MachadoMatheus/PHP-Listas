<!DOCTYPE html>
<html>
<head>
	<title>Exercício 10</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<?php 
/*10. Escreva um programa qualquer que utilize os comandos if, elseif e else
na mesma estrutura de código.*/
	$tam = 2;
	for ($i=0; $i < $tam; $i++) { 
		$numeros[$i] = rand(12,27);
	}

	if ($numeros[0] > $numeros[1]) {
		echo "O número $numeros[0] é maior que o número $numeros[1]";
	} elseif ($numeros[1] > $numeros[0]) {
		echo "O número $numeros[1] é maior que o número $numeros[0]";
	} else {
		echo "Os números $numeros[0] e $numeros[1] são iguais.";
	}
?>
</body>
</html>