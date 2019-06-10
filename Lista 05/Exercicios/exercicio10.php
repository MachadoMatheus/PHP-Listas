<!DOCTYPE html>
<html>
<head>
	<title>Exercício 10</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<?php 
/*10) Escreva um programa que armazene em um vetor os números
múltiplos de 5, de 1 até 300. Exiba o conteúdo do vetor na tela.*/
	for ($i=1; $i <= 300; $i++) { 
		if ($i % 5 == 0) {
			$multiplosDeCinco[] = $i; 
		}
	}
	echo "Múltiplos de 5 de 1 até 300: <br>";
	foreach ($multiplosDeCinco as $key => $value) {
		echo ($key+1)."º = ".$value."<br>";
	}
?>
</body>
</html>