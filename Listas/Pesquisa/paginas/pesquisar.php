<?php  
		include("../layouts.php");
		$links = null; //ex.: array('Facebook' => 'https://facebook.com')
		$titulo = "Pesquisar Produto";
		$conteudoEsquerda[] = 
		"<h1>Pesquisa de Produto</h1>
				<div class='fundoForm'>
					<form method='POST' action='exibirProduto.php'>
						<label for='produto'>Produto</label><br>
						<input type='text' id='produto' name='nome' size='20' required='required' placeholder='Digite o nome do poduto a pesquisar..'><br>
						<input type='submit' name='Enviar'>
					</form>
		</div>";

		$conteudoDireita[] = 
		"<div align='center'><img src='https://machadomatheus.github.io/Vetores/Achados/carrinho.svg' height='123px'></div>";

		$layout = new layout();

		echo $layout->cabecalho($titulo);
		echo $layout->barra($links);
		echo $layout->corpo($conteudoEsquerda, $conteudoDireita);
		echo $layout->rodape();
?>