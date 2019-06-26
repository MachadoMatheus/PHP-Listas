<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Pesquisar Produto</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<meta charset="utf-8">
</head>
<body> 
	<div class='cabecalho'>Produto Cadastrado</div>
	<div class="dados">
	<?php 
		$nome = $_POST["nome"];
		$fabricante = $_POST["fabricante"];
		$venda = $_POST["venda"];
		$descricao = $_POST["descricao"];
		$tipo = $_POST["tipo"];
		$indicacao = $_POST["indicacao"];

		$produto = fopen($nome, "w");

		fwrite($produto, 
"Nome = $nome
Fabricante = $fabricante
Venda = $venda
Descicao = descricao
Tipo = $tipo
Indicação = $indicacao
")
	?>
	</div>
</body>
</html>