<?php 
		include("layouts.php");

		$pastaExercicios = "Exercicios/";
		$arquivosPasta = scandir($pastaExercicios);
				
					//Ordenar o array para a 'ordem natural'
		usort($arquivosPasta, 'strnatcmp');

		$paginas =  "<div class = 'botoes'>";
		for ($i=2; $i < count($arquivosPasta); $i++) { /*Elimina as pastas "." e ".."*/
				$nomeArquivo = $arquivosPasta[$i];
			$paginas = $paginas.("<a href='$pastaExercicios$nomeArquivo'><button style='width:25%;'>$nomeArquivo</button></a>");
		}
		$paginas = $paginas."</div>"; 

		$titulo = "Exercício 1";

		$layout = new layout();


		$conteudoEsquerda[] = $paginas;


		echo $layout->cabecalho($titulo, null, "estiloIndex.css");
		echo $layout->barra();
		echo $layout->corpo($conteudoEsquerda);
		echo $layout->rodape();
?>