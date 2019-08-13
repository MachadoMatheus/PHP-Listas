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
		include('../layouts.php');
		
		$links = null; //ex.: array('Facebook' => 'https://facebook.com')
		$titulo = 'Strings do PHP';
		$conteudoEsquerda[] = 
		"<form class='fundoForm'  method='POST' action='string.php'>
		<label class='textTitulo' for='coisa'>Digite uma string qualquer</label>
		<input type='text' id='coisa' name='coisa' size='255' placeholder='String'>
		<input type='submit' name='Enviar'></form>";

		function exibir($matriz)
		{
			# code...
		}

		$layout = new layout();

		echo $layout->cabecalho($titulo);
		echo $layout->barra($links);
		echo $layout->corpo($conteudoEsquerda);
		echo $layout->rodape();
	?>
</body>
</html>