<!DOCTYPE html>
<html>
<head>
	<title>Exercício 10</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<?php 
/*11. Considere a seguinte variável: $nome = “1Pedro”.
Escreva um programa para verificar se o primeiro caractere contido na
variável é um número ou uma letra. Utilize o comando switch e imprima o
resultado na tela.*/
	$nome = "1Pedro";
	$primeiroCaractere = substr($nome, 0, 1);
	$primeiroCaractereIsNumero = is_numeric($primeiroCaractere);

	switch ($primeiroCaractereIsNumero) {
		case true:
			echo "O primeiro caractere da string $nome é um número e vale $primeiroCaractere!!!";
			break;
		
		default:
			echo "O primeiro caractere da string $nome é uma letra e vale $primeiroCaractere!!!";
			break;
	}
?>
</body>
</html>