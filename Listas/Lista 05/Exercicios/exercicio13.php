<!DOCTYPE html>
<html>
<head>
	<title>Exercício 10</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<?php 
/*13) Escreva um programa que exiba na tela o resultado da tabuada de
um número informado por URL.*/

	$n = $_GET["n"];

	for ($i=0; $i <= 10; $i++) { 
		echo "$i x $n = ".($i * $n)."<br>";
	}
?>
</body>
</html>