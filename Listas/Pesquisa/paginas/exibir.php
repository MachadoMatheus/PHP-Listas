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

	<div class="dados">
	<?php 
		$nome = $_POST["nome"];
		$fabricante = $_POST["fabricante"];
		$custo = $_POST["custo"];
		$venda = $_POST["venda"];
		$descricao = $_POST["descricao"];
		$tipo = $_POST["tipo"];
		$indicacao = $_POST["indicacao"];

		$produto = fopen($nome.".txt", "w");

		fwrite($produto, 
"Nome = $nome
Fabricante = $fabricante
Custo = $custo
Venda = $venda
Descrição = $descricao
Tipo = $tipo
Indicação = $indicacao
");
		fclose($produto);
		$produto = fopen($nome.".txt", "r");

		while (!feof($produto)) {
			$linha = fgets($produto, 4096);
			echo "$linha<br>";
		}
	?>
	</div>
</body>
</html>