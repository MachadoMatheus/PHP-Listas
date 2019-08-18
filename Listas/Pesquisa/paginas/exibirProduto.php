<?php  
		include("../layouts.php");
		$links = null; //ex.: array('Facebook' => 'https://facebook.com')
		$titulo = "exibir Produto";
		$nome = trim($_POST["nome"]);

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