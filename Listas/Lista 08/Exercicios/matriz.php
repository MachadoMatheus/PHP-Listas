<!DOCTYPE html>
<html lang='pt-br'>
<head>
	<title>Matrizes em PHP</title>
	<link rel='stylesheet' type='text/css' href='../estiloGeral.css'>
	<link href="https://fonts.googleapis.com/css?family=Acme|Indie+Flower&display=swap" rel="stylesheet">
	<meta charset='utf-8'>
</head>
<body> 
	
	<?php 
		foreach ($_POST as $key => $value) {
			if ($key == 'Enviar') {
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
			$exibicaoMatriz = "<div class='textTitulo'>$nomeMatriz:</div><table>";
			for ($i=0; $i < count($matriz); $i++) { 
				$exibicaoMatriz = $exibicaoMatriz."<tr>";
				for ($j=0; $j < count($matriz); $j++) { 
					$exibicaoMatriz = $exibicaoMatriz."<td>".$matriz[$i][$j]."</td>";
				}
				$exibicaoMatriz = $exibicaoMatriz."</tr>";
			}
			$exibicaoMatriz = $exibicaoMatriz."</table>";

			return $exibicaoMatriz;
		}

		function exibirVetor($vetor, $nomeVetor)
		{
			$exibicaoVetor = "<div class='textTitulo'>$nomeVetor:</div>";
			$tam = 100/count($vetor);
			for ($i=0; $i < count($vetor); $i++) { 
				$exibicaoVetor = $exibicaoVetor."<div style='float:left; width:$tam%;text-align:center;'>".$vetor[$i]."</div>";
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

		function calcularDiagonalSecundaria($matriz)
		{
			for ($i=0; $i < count($matriz); $i++) { 
				for ($j=0; $j < count($matriz); $j++) { 
					if ($i + $j == (count($matriz) - 1)) {
						$diagonal[] = $matriz[$i][$j];
					}
				}
			}

			return $diagonal;
		}

		include('../layouts.php');
		
		$links = null; //ex.: array('Facebook' => 'https://facebook.com')
		$titulo = 'Matrizes do PHP';
		$conteudoEsquerda[] = exibirMatriz($matriz, 'Matriz Inicial');
		$conteudoEsquerda[] = exibirMatriz(multiplicarMatrizPorX($matriz, 7), 'Matriz Multiplicada por 7');
		$conteudoEsquerda[] = exibirVetor(calcularMediaLinhas($matriz), 'Média das Linhas');
		$conteudoEsquerda[] = exibirVetor(calcularDiagonalPrincipal($matriz), 'Elementos da Diagonal Principal');
		$conteudoEsquerda[] = exibirVetor(calcularDiagonalSecundaria($matriz), 'Elementos da Diagonal Secundaria');

		$layout = new layout();

		echo $layout->cabecalho($titulo);
		echo $layout->barra($links);
		echo $layout->corpo($conteudoEsquerda);
		echo $layout->rodape();
	?>
</body>
</html>