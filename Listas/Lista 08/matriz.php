<!DOCTYPE html>
<html lang='pt-br'>
<head>
	<title>Produtos em PHP</title>
	<link rel='stylesheet' type='text/css' href='estilo.css'>
	<meta charset='utf-8'>
</head>
<body> 
	
	<?php 
		foreach ($_POST as $key => $value) {
			if ($value == 'Submit') {
				break;
			} else {
				$indices = explode("|", $key);
				$i = $indices[0];
				$j = $indices[1];
				$matriz[$i][$j] = $value;
			}
		}

		function exibirMatriz($matriz, $nomeMatriz)
		{
			$exibicaoMatriz = "$nomeMatriz:<br>"
			for ($i=0; $i < count($matriz); $i++) { 
				for ($j=0; $j < count($matriz); $j++) { 
					$exibicaoMatriz = $exibicaoMatriz."<div style='float:left; width:25%;'>".$matriz[$i][$j]."</div>";
				}
			}

			return $exibicaoMatriz;
		}

		function exibirVetor($vetor, $nomeVetor)
		{
			$exibicaoVetor = "$nomeVetor:<br>"
			$tam = 100/count($vetor);
			for ($i=0; $i < count($vetor); $i++) { 
				$exibicaoVetor = $exibicaoVetor."<div style='float:left; width:$tam%;'>".$vetor[$i]."</div>";
			}

			return $exibicaoVetor;
		}

		function multiplicarMatrizPorX($matriz, $x)
		{
			
			for ($i=0; $i < count($matriz); $i++) { 
				for ($j=0; $j < count($matriz); $j++) { 
					$matriz[$i][$j] *= $x;
				}
			}

			return $matriz;
		}

		function calcularMediaLinhas($matriz)
		{
			for ($i=0; $i < count($matriz); $i++) { 
				$medias[$i] = 0;
				for ($j=0; $j < count($matriz); $j++) { 
					$medias[$i] += $matriz[$i][$j];
				}
				$medias[$i] /= count($matriz);
			}

			return $medias;
		}

		function calcularDiagonalPrincipal($matriz)
		{
			for ($i=0; $i < count($matriz); $i++) { 
				for ($j=0; $j < count($matriz); $j++) { 
					if ($i == $j) {
						$diagonal[] = $matriz[$i][$j];
					}
				}
			}

			return $diagonal;
		}

		function calcularDiagonalPrincipal($matriz)
		{
			for ($i=0; $i < count($matriz); $i++) { 
				for ($j=0; $j < count($matriz); $j++) { 
					if ($i + $j == (count($matriz) + 1)) {
						$diagonal[] = $matriz[$i][$j];
					}
				}
			}

			return $diagonal;
		}

		include('layouts.php');
		
		$links = null; //ex.: array('Facebook' => 'https://facebook.com')
		$titulo = 'Baskhara do PHP';
		$conteudoEsquerda[] = 1;

		$layout = new layout();

		echo $layout->cabecalho($titulo);
		echo $layout->barra($links);
		echo $layout->corpo($conteudoEsquerda);
		echo $layout->rodape();
	?>
</body>
</html>