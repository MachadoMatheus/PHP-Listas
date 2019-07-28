<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Produtos em PHP</title>
	<link rel="stylesheet" type="text/css" href="estiloIndex.css">
	<meta charset="utf-8">
</head>
<body> 
	<?php 
		include("layouts.php");
		
		$links = null; //ex.: array('Facebook' => 'https://facebook.com')
		$titulo = "Lojinha do PHP";
		$conteudoEsquerda[] = 
		"<a href='paginas/pesquisar.php' target='parent'><button><img src='https://machadomatheus.github.io/Imagens/lupa.png' width='50px'> Pesquisar</button></a><br>
		<a href='paginas/inserir.php' target='parent'><button><img src='https://machadomatheus.github.io/Imagens/add.png' width='50px'> Inserir</button></a>";

		$conteudoDireita[] = 
		"<div align='center'><img src='https://machadomatheus.github.io/Imagens/carrinho.png' height='123px'></div>";


		$layout = new layout();

		echo $layout->cabecalho($titulo);
		echo $layout->barra($links);
		echo $layout->corpo($conteudoEsquerda, $conteudoDireita);
		echo $layout->rodape();
	?>
</body>
</html>