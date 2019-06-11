<!DOCTYPE html>
<html>
<head>
	<title>Exercício 10</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<?php 
/*14) O algoritmo que calcula o valor do táxi considera as variáveis tempo
e distância, ou seja, mesmo que o carro esteja parado em um sinal, a
conta do taxi vai aumentando. Faça um programa que dado o tempo e
a distância informados por URL, calcule o valor a ser pago pela
corrida. O custo é R$ 0,03 centavos por segundo e R$ 1,50 por
quilômetro.*/

	$tempo = $_GET["t"];
	$distancia = $_GET["d"];
	$precoPorSegundo = 0.03;
	$precoPorQuilometro = 1.5;

	//Frescurite pra não ficar tão simples :P
	if ($tempo[0] == 'm') { //'m' pra minutos
		$tempo = (doubleval(substr($tempo, 1))) * 60;
	} elseif ($tempo[0] == 'h') {//'h' pra horas
		$tempo = (doubleval(substr($tempo, 1))) * 3600;
	} elseif ($tempo[0] == 's') {//'s' pra segundos
		$tempo = doubleval(substr($tempo, 1));
	} else {
		echo "Valor informado para tempo inválido!!!<br> O tempo será considerado como 1 minuto.<br>";
		$tempo = 60;
	}

	$precoTotal = ($tempo * $precoPorSegundo) + ($distancia * $precoPorQuilometro);

	echo "Tempo = $tempo segundos<br>Distância = $distancia quilômetros<br>O preço total da corrida foi de ".number_format($precoTotal, 2, ",", ".")." R$";
?>
</body>
</html>