<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Pesquisar Produto</title>
	<link rel="stylesheet" type="text/css" href="../estiloIndex.css">
	<link href="https://fonts.googleapis.com/css?family=Acme|Indie+Flower&display=swap" rel="stylesheet">
	<meta charset="utf-8">
</head>
<body> 
	<?php  
		include("../layouts.php");
		$links = null; //ex.: array('Facebook' => 'https://facebook.com')
		$titulo = "Lojinha do PHP";
		$nome = $_POST["nome"];

		$produtos = scandir("Produtos/");

		$dadosProduto = "<h1>Produto Cadastrado</h1>";
		foreach ($produtos as $produto) {
			if ($produto == $nome.".txt") {
				$arquivo = fopen("Produtos/$nome.txt", "r");
				while (!feof($arquivo)) {
					$l = fgets($arquivo);
					$dadosProduto = $dadosProduto."$l<br>";
				}
			}
		}

		if ($dadosProduto == "<h1>Produto Cadastrado</h1>") {
			$dadosProduto = $dadosProduto."!!!Produto não encontrado!!!";
		}

		$conteudoEsquerda[] = $dadosProduto;

		$conteudoDireita[] = 
		"<div align='center'><img src='https://machadomatheus.github.io/Vetores/Achados/carrinho.svg' height='123px'></div>";

		$layout = new layout();

		echo $layout->cabecalho($titulo);
		echo $layout->barra($links);
		echo $layout->corpo($conteudoEsquerda, $conteudoDireita);
		echo $layout->rodape();
	?>
</body>
</html>