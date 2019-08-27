<?php 
		include("../layouts.php");
		if (isset($_POST) && !empty($_POST)) {
			if (isset($_COOKIE['nomes'])) {

				$nomesAnteriores = unserialize($_COOKIE['nomes']);
				$nomesAnteriores[] = $_POST['nome'];
			} else {
				$nomesAnteriores[] = $_POST['nome'];
			}
			

			setcookie("nomes", serialize($nomesAnteriores), time()+3600);
		} elseif (isset($_COOKIE['nomes'])) {
			$nomesAnteriores = unserialize($_COOKIE['nomes']);
		} else {
			$nomesAnteriores[] = "Natália";
		}
		$sugestoes = "Ex.:";
		foreach ($nomesAnteriores as $posicao => $nome) {
			$sugestoes = $sugestoes.$nome;
			if ($posicao == count($nomesAnteriores) - 1) {
				$sugestoes = $sugestoes."...";
			} else {
				$sugestoes = $sugestoes.",";
			}
		}
		

		$conteudoEsquerda[] = "<form action='".$_SERVER["PHP_SELF"]."' method='POST'>
		<label for='nome'><div class='textTitulo'>Nome</div></label>
		<input type='text' name='nome' id='nome' placeholder='$sugestoes' required='required'>
		<input type='submit' value='Enviar'>
		</form>";

		$titulo = "Exercício 4";

		$layout = new layout();


		echo $layout->cabecalho($titulo, null, "../estiloIndex.css");
		echo $layout->barra();
		echo $layout->corpo($conteudoEsquerda);
		echo $layout->rodape();
?>