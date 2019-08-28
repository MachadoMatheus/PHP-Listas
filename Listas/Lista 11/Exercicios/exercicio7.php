<?php 
		/*Edinho Sheeran fez 3 provas durante um semestre no CTISM, porém apenas as duas mais altas serão levadas em consideração. Faça um formulário que peça o valor das 3 notas, mostre como seria a média com essas 3 provas, a média com as 2 notas mais altas, bem como sua nota mais alta e sua nota mais baixa. Crie funções para isso.*/
		include("../layouts.php");
		$conteudoDireita = null;

		function medias($notas)
		{
			$notaAlta = -256;
			$notaBaixa = 256;
			$soma = 0;
			foreach ($notas as $nota) {
				if ($nota > $notaAlta) {
					$notaAlta = $nota;
				}
				if ($nota < $notaBaixa) {
					$notaBaixa = $nota;
				}
				$soma += $nota;
			}
			$mediaAlta = ($soma - $notaBaixa) / (count($notas) - 1);
			$mediaBaixa = $soma / count($notas);

			return $medias = array('notaAlta' => $notaAlta, 'notaBaixa' => $notaBaixa, 'mediaAlta' => $mediaAlta, 'mediaBaixa' => $mediaBaixa );
		}

		if (!empty($_POST)) {
			$notas = $_POST['notas'];

			$medias = medias($notas);

			$conteudoDireita[] = "<b>Aluno:</b> Edinho<br><b>Nota mais alta: </b>".$medias['notaAlta']."<br><b>Nota mais baixa: </b>".$medias['notaBaixa']."<br><b>Média das notas altas: </b>".round($medias['mediaAlta'], 2)."<br><b>Média geral das notas: </b>".round($medias['mediaBaixa'], 2);
		}


		$titulo = "Exercício 7";

		$layout = new layout();

		$formulario = "<h1>Formulário para notas do Edinho:</h1><form action='".$_SERVER["PHP_SELF"]."' method='POST'>
		<label for='nota1'><div class='textTitulo'>Digite a 1º nota do companheiro:</div></label>
		<input type='number' name='notas[]' id='nota1' step='0.05' required='required'>
		<label for='nota2'><div class='textTitulo'>Digite a 2º nota do companheiro:</div></label>
		<input type='number' name='notas[]' id='nota2' step='0.05' required='required'>
		<label for='nota3'><div class='textTitulo'>Digite a 3º nota do companheiro:</div></label>
		<input type='number' name='notas[]' id='nota3' step='0.05' required='required'>
		<input type='submit' value='Enviar'>
		</form>";


		$conteudoEsquerda[] = $formulario;

		echo $layout->cabecalho($titulo, null, "../estiloIndex.css");
		echo $layout->barra();
		echo $layout->corpo($conteudoEsquerda, $conteudoDireita);
		echo $layout->rodape();
?>