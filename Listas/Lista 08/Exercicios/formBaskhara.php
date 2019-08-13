<!DOCTYPE html>
<html lang='pt-br'>
<head>
	<title>Baskhara em PHP</title>
	<link rel='stylesheet' type='text/css' href='../estiloGeral.css'>
	<link href="https://fonts.googleapis.com/css?family=Acme|Indie+Flower&display=swap" rel="stylesheet">
	<meta charset='utf-8'>
</head>
<body> 
	
	<?php 
		include('../layouts.php');
		
		$links = null; //ex.: array('Facebook' => 'https://facebook.com')
		$titulo = 'Baskhara do PHP';
		$conteudoEsquerda[] = 
		"<form class='fundoForm' method='POST' action='baskhara.php'>
		<label class='textTitulo' for='a'>Valor de a</label>
		<input type='number' id='a' name='a' size='10' placeholder='Digite o Valor de a..'>	<br>
		<label class='textTitulo' for='b'>Valor de b</label>
		<input type='number' name='b' id='b' size='10' placeholder='Digite o Valor de b..'> <br>
		<label class='textTitulo' for='c'>Digite o Valor de c</label>
		<input type='number' name='c' id='c' size='10' placeholder='Digite o Digite o Valor de c..'> <br>

		<input type='submit' name='Enviar'>
		</form>";


		$layout = new layout();

		echo $layout->cabecalho($titulo);
		echo $layout->barra($links);
		echo $layout->corpo($conteudoEsquerda);
		echo $layout->rodape();
	?>
</body>
</html>