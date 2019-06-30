<!DOCTYPE html>
<html>
<head>
	<title>Exercício 5</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<?php 
/*5. Em uma aula, no curso de Sistemas de Informação, apenas 30% dos 40
alunos comparecem. Escreva um programa para exibir o número de alunos que
faltaram a aula e se esse número é superior a 25*/
	$totalAlunos = 40;
	$porcAusente = 30;

	$alunosAusentes = $totalAlunos*($porcAusente/100);

	echo "$alunosAusentes alunos faltaram e ";

	if ($alunosAusentes > 25) {
		echo "são mais do que 25";
	} else {
		echo "não são mais que 25";
	}
	
?>
</body>
</html>