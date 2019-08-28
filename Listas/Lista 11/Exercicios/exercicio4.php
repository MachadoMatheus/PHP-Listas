<?php 
		/*Faça uma função que imprima o maior número de 10 dentre os digitados em um formulário HTML;*/
		include("../layouts.php");

		function matematicas($num)
		{
			$valorSeno = sin($num);
			$valorCosseno = cos($num);
			$valorTangente = tan($num);
			$valorLN = log($num);

			return "Número: $num<br>Seno: ".round($valorSeno, 2)."<em>rad</em><br>Cosseno: ".round($valorCosseno, 2)."<em>rad</em><br>Tangente: ".round($valorTangente, 2)."<em>rad</em><br>Logaritmo Natural: ".round($valorLN, 2);
		}

		if (isset($_POST) && !empty($_POST)) {
			$num = $_POST['num'];

			$conteudoDireita[] = matematicas($num);
		} else {
			$conteudoDireita = null;
		}



		$titulo = "Exercício 4";

		$layout = new layout();

		$formulario = "<form action='".$_SERVER["PHP_SELF"]."' method='POST'>
		<label for='num'><div class='textTitulo'>Número para calcular sen, cos, tg e ln</div></label>
		<input type='number' name='num' id='num' placeholder='Ex.: 16' required='required'>
		<input type='submit' value='Enviar'>
		</form>";


		$conteudoEsquerda[] = $formulario;

		echo $layout->cabecalho($titulo, null, "../estiloIndex.css");
		echo $layout->barra();
		echo $layout->corpo($conteudoEsquerda, $conteudoDireita);
		echo $layout->rodape();
?>