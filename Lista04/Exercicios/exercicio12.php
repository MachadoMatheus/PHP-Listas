<!DOCTYPE html>
<html>
<head>
	<title>Exercício 10</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<?php 
/*12. Escreva um programa que adicione em uma string qualquer as tags html
para negrito. Após, verifique se a string com as tags inseridas são de negrito ou
de itálico. Imprima o resultado na tela*/
	$nome = "Natália";
	$tamanhoNome = strlen($nome);
	echo "String = $nome<br>";

	$negritoIni = "<b>";
	$negritoFim = "</b>";
	$italicoIni = "<e>";
	$italicoFim = "</e>";

	$nome = $negritoIni.$nome.$negritoFim;
	echo "String = $nome<br>";

	$tagIniInserida = substr($nome, 0, 3);
	$tagFimInserida = substr($nome, $tamanhoNome + 3, 4);

	if ($tagIniInserida == $negritoIni && $tagFimInserida == $negritoFim) {
		echo "As tags inseridas foram as de negrito!!!";
	} elseif ($tagIniInserida == $italicoIni && $tagFimInserida == $italicoFim) {
		echo "As tags inseridas foram as de itálico!!!";
	} else {
		echo "Não foram inseridas tags na string inicial.";
	}

?>
</body>
</html>