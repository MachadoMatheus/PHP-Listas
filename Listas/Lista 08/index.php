<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Produtos em PHP</title>
	<link rel="stylesheet" type="text/css" href="estiloGeral.css">
	<link href="https://fonts.googleapis.com/css?family=Acme|Indie+Flower&display=swap" rel="stylesheet">
	<meta charset="utf-8">
</head>
<body> 
	<?php 
		include("layouts.php");

		$pastaExercicios = "Exercicios/";
				$arquivosPasta = scandir($pastaExercicios);
				
					//Ordenar o array para a 'ordem natural'
				usort($arquivosPasta, 'strnatcmp');

				$listas = "<div class = 'botoes'>";
				for ($i=2; $i < count($arquivosPasta); $i++) { /*Elimina as pastas "." e ".."*/
					$nomeArquivo = $arquivosPasta[$i];
				$listas = $listas."<a href='$pastaExercicios$nomeArquivo'><button>$nomeArquivo</button></a>";
			}
		$listas = $listas."</div>"; 
		
		$links = null; //ex.: array('Facebook' => 'https://facebook.com')
		$titulo = "Lojinha do PHP";
		$conteudoEsquerda[] = $listas;

		$layout = new layout();

		echo $layout->cabecalho($titulo);
		echo $layout->barra($links);
		echo $layout->corpo($conteudoEsquerda);
		echo $layout->rodape();
	?>
</body>
</html>