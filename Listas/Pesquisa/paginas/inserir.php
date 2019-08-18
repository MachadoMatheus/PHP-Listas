<?php
include("../layouts.php");

if (!empty($_POST)) {
	$nome = trim($_POST["nome"]);
	$fabricante = trim($_POST["fabricante"]);
	$custo = $_POST["custo"];
	$venda = $_POST["venda"];
	$descricao = trim($_POST["descricao"]);
	$tipo = trim($_POST["tipo"]);
	$indicacao = trim($_POST["indicacao"]);

	if ($custo < 0 || $venda < 0) {
		$conteudoEsquerda[] = "Cadastro não realizado:<br>Não são aceitos números negativos para os campos Custo e Venda";
	} else {
		$produto = fopen("Produtos/".$nome.".txt", "w");

		$margem = $venda - $custo;

		fwrite($produto, 
"Nome = $nome
Fabricante = $fabricante
Custo = $custo
Venda = $venda
Margem = $margem
Descrição = $descricao
Tipo = $tipo
Indicação = $indicacao
");
		fclose($produto);
		$conteudoEsquerda[] = "
		<form action='exibirProduto.php' method='POST'><input type='hidden' name='nome' value='$nome'>
		 <input style='float:none; width:100%; height:50px; font-size:30px;' type='submit' value='Cadastro realizado com sucesso!!! Clique aqui para visualizar'></form> ";
	}
}

$links = null; //ex.: array('Facebook' => 'https://facebook.com')
$titulo = "Inserir Produto";
$conteudoEsquerda[] = 
"<h1>Cadastro de Produto</h1>
	<div class='fundoForm'>
		<form method='POST' action=".$_SERVER['PHP_SELF'].">
			<label class='textTitulo' for='produto'>Produto</label><br>
			<input type='text' id='user' name='nome' size='20' required='required' placeholder='Digite o nome do produto..'>	<br>
			<label class='textTitulo' for='fab'>Fabricante</label>
			<input type='text' name='fabricante' id='fab' size='25' required='required' placeholder='Digite o nome do fabricante..'>
			<label class='textTitulo' for='custo'>Custo</label>
			<input type='number' name='custo' id='custo' size='6' step='0.01' required='required' placeholder='Digite o custo do produto..'>
			<label class='textTitulo' for='venda'>Venda</label>
			<input type='number' name='venda' id='venda' size='6' step='0.01' required='required' placeholder='Digite o valor de venda do produto..'>
			<label class='textTitulo' for='desc'>Descrição</label><br>
			<textarea type='text' name='descricao' id='desc' rows='4' cols='50' required='required' placeholder='Digite uma descrição para o produto..'></textarea>

			<div class='textTitulo'>Tipo de Produto</div>

			<input type='radio' name='tipo' id='alim' value='Alimento' checked><label for='alim'>Alimento</label><br>
			<input type='radio' name='tipo' id='limp' value='Limpeza' ><label for='limp'>Limpeza</label><br>
			<input type='radio' name='tipo' id='bebi' value='Bebida' ><label for='bebi'>Bebida</label><br>

			<div class='textTitulo'>Indicação do Poduto</div>

			<input type='radio' name='indicacao' id='uni' value='Unidade' checked><label for='uni'>Unidade</label><br>
			<input type='radio' name='indicacao' id='qui' value='Quilo'><label for='qui'>Quilo</label><br>
			<input type='radio' name='indicacao' id='pac' value='Pacote'><label for='pac'>Pacote</label><br>

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