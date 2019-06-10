<!DOCTYPE html>
<html>
<head>
	<title>Exercício 3</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<?php 
/*3. Em uma fábrica, 27 funcionários montam 90 computadores cada um todos
os dias. Escreva um programa que exiba a quantidade de computadores
montados a cada mês e se esse valor é inferior a 4.000 computadores.*/
	$funcionarios = 27;
	$pcPorDia = 90;
	$diasDoMes = 30;


	$totalPC = $funcionarios*$pcPorDia*$diasDoMes;


	echo "O número de PCs montados por mês é $totalPC e esse número é ";

	if ($totalPC > 4000) {
		echo "maior do que 4000.";
	} else {
		echo "menor do que 4000";
	}
?>
</body>
</html>