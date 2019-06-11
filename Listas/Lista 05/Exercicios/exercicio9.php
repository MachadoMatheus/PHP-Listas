<!DOCTYPE html>
<html>
<head>
	<title>Exercício 9</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<?php 
/*9) Armazene em um vetor a série de FIBONACCI (20 iterações) a partir
de um número informado por URL. Exiba na tela o conteúdo do vetor.*/
	$nOuro = (1 + sqrt(5))/2;

	$k = $_GET["k"];

	echo "Número informado = $k<br>";
	for ($n=$k; $n < $k + 20; $n++) { 
		$J[$n] = round(((pow($nOuro, $n))/sqrt(5)));
		echo "F(".$n.") = ".$J[$n]."<br>";
	}
?>
</body>
</html>