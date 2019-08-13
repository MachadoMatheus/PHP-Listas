<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Baskhara em PHP</title>
	<link rel="stylesheet" type="text/css" href="../estiloGeral.css">
	<link href="https://fonts.googleapis.com/css?family=Acme|Indie+Flower&display=swap" rel="stylesheet">
	<meta charset="utf-8">
</head>
<body> 
	<?php 
		function calcularDelta($b, $a, $c)
		{
			$delta = (($b*$b) - (4*$a*$c));

			if ($delta == 0) {
				$resp = array(0, $delta);
			}

			if ($delta < 0) {
				$resp = array(1, $delta);
			}
			
			if ($delta > 0) {
				$resp = array(2, $delta);
			}
		}

		function calcularRaizesDeltaZero($delta, $b, $a)
		{
			$resp = (-$b +  sqrt($delta))/2;
			return $resp;
		}

		function calcularRaizesDeltaPositivo($delta, $b, $a)
		{
			$resp['+'] = (-$b +  sqrt($delta))/2;
			$resp['-'] = (-$b -  sqrt($delta))/2;
			return $resp;
		}


		function calcularRaizes($a, $b, $c)
		{
			$respDelta = calcularDelta($a, $b, $c);

			if ($respDelta[0] == 0) {
				$raiz = calcularRaizesDeltaZero($respDelta[1], $b, $c);
				return "A raiz da equação é $raiz";
			}

			if ($respDelta[0] == 1) {
				return "!!!A equação quadrática não possui raíz real!!!";
			}

			if ($respDelta[0] == 2) {
				$raizes = calcularRaizesDeltaPositivo($respDelta[1], $b, $c);
				return "As raízes da equação são $raizes[1], $raizes[2]";
			}
		}

		$a = $_POST['a'];
		$b = $_POST['b'];
		$c = $_POST['c'];

		$resp = calcularRaizes($a, $b, $c);


		include("../layouts.php");
		
		$links = null; //ex.: array('Facebook' => 'https://facebook.com')
		$titulo = "Baskhara do PHP";
		$conteudoEsquerda[] = 
		"Solução:<br> $resp";


		$layout = new layout();

		echo $layout->cabecalho($titulo);
		echo $layout->barra($links);
		echo $layout->corpo($conteudoEsquerda);
		echo $layout->rodape();
	?>
</body>
</html>