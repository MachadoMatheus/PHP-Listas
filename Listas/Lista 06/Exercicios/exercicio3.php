<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Exercício 3</title>
	<link rel="stylesheet" type="text/css" href="estilo.css?version=17">
</head>
<body> 
<!--3) Escreva um programa para recuperar os dados cadastrados pelo
programa 2, imprimindo o resultado na tela.-->
	<?php 
		$arquivo = fopen("saidaExercicio2.txt", "r");

		echo("
			<div class = 'dados'>
			<ul>");
		while (!feof($arquivo)) {
			$linha  = fgets($arquivo, 4096);
			echo "<li>$linha</li>";	
		}
		echo "
			</ul>
			</div>";
		fclose($arquivo);
	?>
</body>
</html>