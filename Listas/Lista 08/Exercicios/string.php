<!DOCTYPE html>
<html lang='pt-br'>
<head>
	<title>Strings em PHP</title>
	<link rel='stylesheet' type='text/css' href='../estiloGeral.css'>
	<link href="https://fonts.googleapis.com/css?family=Acme|Indie+Flower&display=swap" rel="stylesheet">
	<meta charset='utf-8'>
</head>
<body> 
	
	<?php 
		$palavra = $_POST['coisa'];
		function contarCaracteres($palavra)
		{
			$letras = str_split($palavra);
			$i = 0;
			foreach ($letras as $letra) {
				$i++;
			}
			return $i;
		}

		function contarVogais($palavra)
		{
			$arquivo = fopen('vogais.txt', 'r');
			$linha = fgets($arquivo);
			$vogais = explode("|", $linha);

			$letras = str_split($palavra);
			$i = 0;
			foreach ($letras as $letra) {
				if (in_array($letra, $vogais)) {
					$i++;
				}
			}
			return $i;
		}

		function mostrarVogais($palavra)
		{
			$arquivo = fopen('vogais.txt', 'r');
			$linha = fgets($arquivo);
			$vogais = explode("|", $linha);

			$letras = str_split($palavra);
			$i = 0;
			$vogaisNaPalavra = null;
			foreach ($letras as $posicao => $letra) {
				if (in_array($letra, $vogais)) {
					$vogaisNaPalavra[$posicao] = $letra;
				}
			}
			return $vogaisNaPalavra;
		}

		include('../layouts.php');
		
		$links = null; //ex.: array('Facebook' => 'https://facebook.com')
		$titulo = 'String = '.$palavra;
		$conteudoEsquerda[] = "Número de Caracteres: ".contarCaracteres($palavra);
		$conteudoEsquerda[] = "Número de Vogais: ".contarVogais($palavra);

		$vogaisNaPalavra = mostrarVogais($palavra);

		if ($vogaisNaPalavra == null) {
			$exibirVogais = "!!!Não há vogais na string informada!!!";
		} else {
			$exibirVogais = "<table><tr><td>Posição</td><td>Vogal</td></tr>";
			foreach ($vogaisNaPalavra as $posicao => $vogal) {
				$exibirVogais = $exibirVogais."<tr><td>".($posicao+1)."</td><td>".$vogal."</td></tr>";
			}
			$exibirVogais = $exibirVogais."</table>";
		}
		
		$conteudoEsquerda[] = "Vogais Presentes: ".$exibirVogais;

		$layout = new layout();

		$conteudoDireita[] = "<a href='formString.php'><button>Voltar</button></a>";

		echo $layout->cabecalho($titulo);
		echo $layout->barra($links);
		echo $layout->corpo($conteudoEsquerda, $conteudoDireita);
		echo $layout->rodape();
	?>
</body>
</html>