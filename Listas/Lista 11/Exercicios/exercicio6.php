<?php 
		/*Desenvolva uma função chamada Dado() que retorna, através de sorteio, um número de 1 até 6. Pesquise uma função nativa que o auxilie nesta programação.*/
		include("../layouts.php");
		$conteudoDireita = null;

		function dado($tipo = null)
		{
			if (is_int($tipo) && $tipo > 1) {
				return rand(1, $tipo);
			} else {
				return "Nada kkkk";
			}
		}



		$titulo = "Exercício 6";

		$layout = new layout();

		$formulario = "<form action='".$_SERVER["PHP_SELF"]."' method='POST'>
		<label for='dado'><div class='textTitulo'>Digite o número de faces do dado(caso queria):</div></label>
		<input type='number' name='dado' id='dado' maxlength='3' value='6' required='required'>
		<input type='submit' value='Enviar'>
		</form>";

		if (isset($_POST) && !empty($_POST)) {
			$conteudoDireita[] = "O número sorteado no seu dado d".intval($_POST['dado'])." foi ".dado(intval($_POST['dado']));
		} else {
			$conteudoDireita[] = "O número sorteado no seu dado d6 foi ".dado(6);
		}


		$conteudoEsquerda[] = $formulario;

		echo $layout->cabecalho($titulo, null, "../estiloIndex.css");
		echo $layout->barra();
		echo $layout->corpo($conteudoEsquerda, $conteudoDireita);
		echo $layout->rodape();
?>