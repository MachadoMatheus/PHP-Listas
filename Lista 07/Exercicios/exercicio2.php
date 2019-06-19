 <!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Exercício 2 + 3</title>
	<link rel="stylesheet" type="text/css" href="estilo.css?version=13">
</head>
<body>
<!--2) Desenvolva um sistema que escreva em um arquivo TXT
utilizando a codificação de 64 bits. Todo o texto deve ser
codificado..-->
	<div class="fundoForm" style="width: 35%;">
		<?php 
		$texto = $_POST["texto"];

		$textoCodificado = base64_encode($texto);

		$nomeArquivo = "exercicio2.txt";

		$arquivo = fopen($nomeArquivo, "w");
		fwrite($arquivo, $textoCodificado);
		fclose($arquivo);

		$arquivo = fopen($nomeArquivo, "r");

		$textoArquivo = fread($arquivo, 4096);
		$textoArquivoDecodificado = base64_decode($textoArquivo);

		$dadosDecodificados = explode("
", $textoArquivoDecodificado);

		echo "<div class = 'textTitulo'>(Exercício 2) <br> Texto CODIFICADO no arquivo: </div> <br>$textoArquivo<br><br>";

		echo "<div class = 'textTitulo'>(Exercício 3) <br>Texto DECODIFICADO do arquivo: </div> <br>";
		foreach ($dadosDecodificados as $value) {
			echo "$value<br>";
		}

		?>
	</div>
</body>
</html>