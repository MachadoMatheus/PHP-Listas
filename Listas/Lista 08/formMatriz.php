<!DOCTYPE html>
<html lang='pt-br'>
<head>
	<title>Produtos em PHP</title>
	<link rel='stylesheet' type='text/css' href='estiloIndex.css'>
	<meta charset='utf-8'>
</head>
<body> 
	<?php 
		include('layouts.php');
		$conteudo="<form method='POST' action='matriz.php'>";
		for ($i=0; $i < 5; $i++) { 
			for ($j=0; $j < 5; $j++) { 
				$conteudo = $conteudo."<input style='float:left; width:20%' type='number' id='$i|$j' name='$i|$j' size='10' placeholder='Valor de [$i][$j]..'>";
			}
			$conteudo = $conteudo."<br>";
		}
		$conteudo = $conteudo."<input type='submit' name='Enviar'></form>";
		
		$links = null; //ex.: array('Facebook' => 'https://facebook.com')
		$titulo = 'Baskhara do PHP';
		$conteudoEsquerda[] = $conteudo;

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