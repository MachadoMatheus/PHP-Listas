<!DOCTYPE html>
<html>
<head>
	<title>Exercício 8</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<?php 
/*8) Escreva um programa com um laço while que ficará em execução até
a variável de controle (iniciada em 0) ser igual ao resultado da
expressão: (2*5) + (8/2) - (2*3).*/
	$expressao = (2*5) + (8/2) - (2*3);

	echo "Expressão (2*5) + (8/2) - (2*3) = $expressao<br>";

	$i = 0;
	while ($i < $expressao) {
		$i++;
		echo "Not Yet.<br>";
	}

	echo "Yes.";
?>
</body>
</html>