<!DOCTYPE html>
<html>
<head>
	<title>Exercício 7</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<?php 
/*7) Escreva um programa para mostrar na tela o resultado das 4
operações aritméticas (+,-,*,/) realizadas entre 2 números inteiros
informados pela URL. Trate possíveis erros de divisão por zero.*/
	$numeros[0] = $_GET["n1"];
	$numeros[1] = $_GET["n2"];
	
	for ($i=0; $i < count($numeros); $i++) { 
		if ($numeros[$i] == 0) {
			$numeroEIgualZero[$i] = true;
		} else {
			$numeroEIgualZero[$i] = false;
		}
	}

	echo "Soma: <br>$numeros[0] + $numeros[1] = ".($numeros[0] + $numeros[1]."<br><br>");
	echo "Subtração: <br>$numeros[0] - $numeros[1] = ".($numeros[0] - $numeros[1]."<br>");
	echo "$numeros[1] - $numeros[0] = ".($numeros[1] - $numeros[0]."<br><br>");
	echo "Multiplicação: <br>$numeros[0] X $numeros[1] = ".($numeros[0] * $numeros[1]."<br>");

	echo "Divisão: <br>";
	if ($numeroEIgualZero[1]) {
		echo "Impossível realizar a divisão do número $numeros[0] por $numeros[1]<br>";
	} else {
		echo "$numeros[0] / $numeros[1] = ".round(($numeros[0] / $numeros[1]), 2)."<br>";
	}

	if ($numeroEIgualZero[0]) {
		echo "Impossível realizar a divisão do número $numeros[1] por $numeros[0]";
	} else {
		echo "$numeros[1] / $numeros[0] = ".round(($numeros[1] / $numeros[0]), 2)."<br>";
	}

?>
</body>
</html>