<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Produtos em PHP</title>
	<link rel="stylesheet" type="text/css" href="estiloIndex.css">
	<meta charset="utf-8">
</head>
<body> 
	<?php 
		$a = explode("\\", __dir__);
		$apagar = false;
		foreach ($a as $key => $value) {
			if (substr($value, 0, 10) == "PHP-Listas") {
				$apagar = true;
			} elseif ($apagar) {
				unset($a[$key]);
			}
		}
		$a = implode("\\", $a)."/layouts.php";
		include($a);
		
		$links = null; //ex.: array('Facebook' => 'https://facebook.com')
		$titulo = "Produtos em PHP";
		$conteudoEsquerda[] = 
		"<a href='paginas/pesquisar.html' target='parent'><button><img src='../imagens/lupa.png' width='50px'> Pesquisar</button></a><br>
		<a href='paginas/inserir.html' target='parent'><button><img src='../imagens/add.png' width='50px'> Inserir</button></a>";

		$conteudoDireita[] = 
		"<div align='center'><img src='../imagens/carrinho.png' height='123px'></div>";


		$layout = new layout();

		echo $layout->cabecalho($titulo);
		echo $layout->barra($links);
		echo $layout->corpo($conteudoEsquerda, $conteudoDireita);
		echo $layout->rodape();
	?>
</body>
</html>