<!DOCTYPE html>
<html>
<head>
	<title>Exercício 9</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<?php 
/*9. Escreva um programa que realize as 4 operações aritméticas entre 2 números quaisquer e teste se os valores atribuídos às variáveis são diferentes de zero.*/
	$numeros[1] = rand(-12, 27);
	$numeros[2] = rand(-12, 27);
	
	for ($i=1; $i <= count($numeros); $i++) { 
		if ($numeros[$i] == 0) {
			$numeroEIgualZero[$i] = true;
		} else {
			$numeroEIgualZero[$i] = false;
		}
	}

	for ($i=1; $i <= count($numeros); $i++) { 
		if ($numeroEIgualZero[$i]) {
			echo "O número $numeros[$i] é igual a zero.<br>";
		} else {
			echo "O número $numeros[$i] é diferente de zero.<br>";
		}
	}



	echo "Soma: <br>$numeros[1] + $numeros[2] = ".($numeros[1] + $numeros[2]."<br><br>");
	echo "Subtração: <br>$numeros[1] - $numeros[2] = ".($numeros[1] - $numeros[2]."<br>");
	echo "$numeros[2] - $numeros[1] = ".($numeros[2] - $numeros[1]."<br><br>");
	echo "Multiplicação: <br>$numeros[1] X $numeros[2] = ".($numeros[1] * $numeros[2]."<br>");

	echo "Divisão: <br>";
	if ($numeroEIgualZero[2]) {
		echo "Impossível realizar a divisão do número $numeros[1] por $numeros[2]";
	} else {
		echo "$numeros[1] / $numeros[2] = ".round(($numeros[1] / $numeros[2]), 2)."<br>";
	}


	if ($numeroEIgualZero[1]) {
		echo "Impossível realizar a divisão do número $numeros[2] por $numeros[1]";
	} else {
		echo "$numeros[2] / $numeros[1] = ".round(($numeros[2] / $numeros[1]), 2)."<br>";
	}

?>
</body>
</html>