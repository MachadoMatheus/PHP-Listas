<?php 
		/*Faça uma função que imprima o maior número de 10 dentre os digitados em um formulário HTML;*/
		include("../layouts.php");

		if (isset($_POST) && !empty($_POST)) {
			$letra = $_POST['letra'];

			if ($letra == 'a' || $letra == 'A' || $letra == 'e' || $letra == 'E' || $letra == 'i' || $letra == 'I' || $letra == 'o' || $letra == 'O' || $letra == 'u' || $letra == 'U') {
				$conteudoDireita[] = $letra." é uma vogal";
			} else {
				$conteudoDireita[] = $letra." não é uma vogal";
			}

			
		} else {
			$conteudoDireita = null;
		}



		$titulo = "Exercício 5";

		$layout = new layout();

		$formulario = "<form action='".$_SERVER["PHP_SELF"]."' method='POST'>
		<label for='letra'><div class='textTitulo'>Letra</div></label>
		<input type='text' name='letra' id='letra' placeholder='Ex.: a' required='required'>
		<input type='submit' value='Enviar'>
		</form>";


		$conteudoEsquerda[] = $formulario;

		echo $layout->cabecalho($titulo, null, "../estiloIndex.css");
		echo $layout->barra();
		echo $layout->corpo($conteudoEsquerda, $conteudoDireita);
		echo $layout->rodape();
?>