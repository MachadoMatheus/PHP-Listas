<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Pesquisar Produto</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<meta charset="utf-8">
</head>
<body> 
		<div class="cabecalho">
			<a href="http://localhost/PHP-Listas/Listas/Pesquisa/">
				<h1>Lojinha do PHP</h1>
			</a>
		</div>

	<div class="barra">
		<a href="..">Voltar</a>
		<a href=".">Recarregar</a>
	</div>

	<div class="corpo">
		<div class="colunaEsquerda">
			<div class="bloco">
				<h1>Produto Cadastrado</h1>
				<?php 
					$nome = $_POST["nome"];
					try {
						$produto = fopen("Produtos/".$nome.".txt", "r");
					} catch(\Exception $e) {
						echo "Produto não encontrado!!";
					}
					

					while (!feof($produto)) {
						$linha = fgets($produto, 4096);
						echo "$linha<br>";
					}
				?>
			</div>
		</div>

		<div class="colunaDireita">
			<div class="bloco">
				<div align="center"><img src="../../imagens/carrinho.png" height="123px"></div>
			</div>
		</div>
	</div>

	<div class="rodape">
		<div style="width: 10%; float: left;"><img src="../imagens/logoUFSM.svg"></div>
		<div style="width: 80%; float: left;vertical-align: center;">
			<h3><br>Matheus Machado<br>423 - 2019</h3>
		</div>
		<div style="width: 10%; float: left;"><img src="../imagens/logoCTISM.svg"></div>
	</div>
</body>
</html>