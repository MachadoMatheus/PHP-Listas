<!DOCTYPE html>
<html>
<head>
	<title>Exercício 6</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<?php 
/*6. Em um curso de computação há 4 mulheres e 13 homens. Escreva um
programa para calcular o percentual de homens e mulheres e verificar qual o
maior percentual entre eles.*/
	$numHomens = 13;
	$numMulheres = 4;
	$totalAlunos = $numMulheres + $numHomens;

	$porcHomens = round((($numHomens/$totalAlunos)*100),2);
	$porcMulheres = round((($numMulheres/$totalAlunos)*100),2);

	echo "A turma possui um total de $totalAlunos alunos, dos quais $porcMulheres% são mulheres e $porcHomens% são homens.<br>";

	if ($numHomens > $numMulheres) {
		echo "Há mais homens do que mulheres";
	} else if ($numHomens == $numMulheres) {
		echo "Há a mesmo quantia de homens e mulheres;";
	} else {
		echo "Há mais mulheres do que homens.";
	}
	
?>
</body>
</html>