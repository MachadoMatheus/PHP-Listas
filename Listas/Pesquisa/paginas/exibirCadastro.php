<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Produto Cadastrado</title>
	<link rel="stylesheet" type="text/css" href="../estiloIndex.css">
	<meta charset="utf-8">
</head>
<body> 
	<?php  
		include("../layouts.php");
		$links = null; //ex.: array('Facebook' => 'https://facebook.com')
		$titulo = "Lojinha do PHP";

		$nome = $_POST["nome"];
		$fabricante = $_POST["fabricante"];
		$custo = $_POST["custo"];
		$venda = $_POST["venda"];
		$descricao = $_POST["descricao"];
		$tipo = $_POST["tipo"];
		$indicacao = $_POST["indicacao"];

		$produto = fopen("Produtos/".$nome.".txt", "w");

		$valorCusto = floatval($custo);
		$valorVenda = floatval($venda);

		$margem = $valorVenda - $valorCusto;

		fwrite($produto, 
"Nome = $nome
Fabricante = $fabricante
Custo = $custo
Venda = $venda
Margem = $margem
Descrição = $descricao
Tipo = $tipo
Indicação = $indicacao
");
		fclose($produto);
		$produto = fopen("Produtos/".$nome.".txt", "r");

		$produtoCadastrado = "<h1>Produto Cadastrado</h1>";
		while (!feof($produto)) {
			$linha = fgets($produto, 4096);
			$produtoCadastrado = $produtoCadastrado."$linha<br>";
		}

		fclose($produto);

		$conteudoEsquerda[] = $produtoCadastrado;

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