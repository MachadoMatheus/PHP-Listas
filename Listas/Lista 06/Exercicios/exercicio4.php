<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Exercício 4</title>
	<link rel="stylesheet" type="text/css" href="estilo.css?version=13">
</head>
<body> 
<!--3) Escreva um programa para recuperar os dados cadastrados pelo
programa 2, imprimindo o resultado na tela.-->
	<?php 
		$nomearquivo = $_POST["nome"];
		$arquivo = fopen($nomearquivo, "r");

		while (!feof($arquivo)) {
			$linha  = fgets($arquivo, 4096);
			echo $linha."<br>";
		}
		fclose($arquivo);
	?>
</body>
</html>