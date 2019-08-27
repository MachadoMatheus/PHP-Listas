<?php 
		/*Faça uma função que imprima o maior número de 10 dentre os digitados em um formulário HTML;*/
		include("../layouts.php");

		if (isset($_POST) && !empty($_POST)) {
			$numeros = $_POST['numeros'];

			$maiorNumero = max($numeros);

			$conteudoDireita[] = "O maior número dentre os digitados foi o ".$maiorNumero;
		} else {
			$conteudoDireita = null;
		}



		$titulo = "Exercício 3";

		$layout = new layout();

		$formulario = "<form action='".$_SERVER["PHP_SELF"]."' method='POST'>Digite 10 números aqui: <br>";

		for ($i=0; $i < 10; $i++) {

			$formulario = $formulario."
		<input type='text' name='numeros[]' id='$i' placeholder='".($i + 1)."º' required='required'>";
		}

		$conteudoEsquerda[] = $formulario."<input type='submit' value='Enviar'>
		</form>";

		echo $layout->cabecalho($titulo, null, "../estiloIndex.css");
		echo $layout->barra();
		echo $layout->corpo($conteudoEsquerda, $conteudoDireita);
		echo $layout->rodape();
?>