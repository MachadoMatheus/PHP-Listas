<?php 
		include("layouts.php");

		if (isset($_COOKIE["gretchen"])) {
			$quantidade = intval($_COOKIE["gretchen"]);
			$quantidade++;
			setcookie("gretchen", "$quantidade", time() + 3600);			
		} else {
			setcookie("gretchen", "0", time() + 3600);
		}

		$titulo = "Exercício 3";

		$layout = new layout();


		$conteudoEsquerda[] = "Você visitou minha página ".(intval($_COOKIE["gretchen"]) + 1)." vezes";


		echo $layout->cabecalho($titulo, null, "estiloIndex.css");
		echo $layout->barra();
		echo $layout->corpo($conteudoEsquerda);
		echo $layout->rodape();
?>