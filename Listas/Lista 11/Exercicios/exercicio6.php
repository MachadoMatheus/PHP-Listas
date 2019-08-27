<?php 
		include("../layouts.php");

		$avisos = "Nada a fazer por aqui!!!";

		if (isset($_COOKIE['nomes'])) {
			$nomesAnteriores = unserialize($_COOKIE['nomes']);
			if (count($nomesAnteriores) > 5) {
				setcookie("nomes", null, time() + 5);
				$conteudoEsquerda[] = "O cookie \"nomes\" se autodestruirá em 5 segundos!!!!";
				unset($avisos);
			}
		} if (isset($_COOKIE['gretchen'])) {
			$quantidade = intval($_COOKIE['gretchen']);
			if ($quantidade > 20) {
				setcookie("gretchen", null, time() + 5);
				$conteudoEsquerda[] = "O cookie \"gretchen\" se autodestruirá em 5 segundos!!!!";
				unset($avisos);
			}
		} if (isset($avisos)) {
			$conteudoEsquerda[] = $avisos;
		}

		$titulo = "Exercício 4";

		$layout = new layout();


		echo $layout->cabecalho($titulo, null, "../estiloIndex.css");
		echo $layout->barra();
		echo $layout->corpo($conteudoEsquerda);
		echo $layout->rodape();
?>