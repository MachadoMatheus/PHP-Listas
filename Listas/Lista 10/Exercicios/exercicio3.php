<?php 
		include("../layouts.php");

		if (isset($_COOKIE["gretchen"])) {
			$quantidade = intval($_COOKIE["gretchen"]);
			$quantidade++;
			setcookie("gretchen", "$quantidade", time() + 3600);
			$conteudoEsquerda[] = "Você visitou minha página ".(intval($_COOKIE["gretchen"]) + 1)." vezes";		
		} else {
			setcookie("gretchen", "0", time() + 3600);
			$conteudoEsquerda[] = "Essa é a primeria vez que você visita esta página!! Seja Bem-Vindo!!!";
		}

		$titulo = "Exercício 3";

		$layout = new layout();


		echo $layout->cabecalho($titulo, null, "../estiloIndex.css");
		echo $layout->barra();
		echo $layout->corpo($conteudoEsquerda);
		echo $layout->rodape();
?>