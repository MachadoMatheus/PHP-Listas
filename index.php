<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title><?php echo basename(__DIR__); ?></title>
	<link rel="stylesheet" type="text/css" href="estiloIndex.css">
	<meta charset="utf-8">
</head>
<body> 
	<div class="cabecalho">
	<a href="https://github.com/MachadoMatheus/PHP-Listas/" target="blank">
		<h1><?php echo basename(__DIR__); ?></h1>
	</a>
	</div>

	<div class="barra">
		<a href="../..">Voltar</a>
		<a href=".">Recarregar</a>
	</div>

	<div class="corpo">
		<div class="colunaEsquerda">
			<div class="bloco">
				<?php 
					$pastaExercicios = "Listas/";
					$arquivosPasta = scandir($pastaExercicios);
		
					//Ordenar o array para a 'ordem natural'
					usort($arquivosPasta, 'strnatcmp');

					echo "<div class = 'botoes'>";
					for ($i=2; $i < count($arquivosPasta); $i++) { /*Elimina as pastas "." e ".."*/
						$nomeArquivo = $arquivosPasta[$i];
						echo ("<a href='$pastaExercicios$nomeArquivo'><button>$nomeArquivo</button></a>");
					}
					echo "</div>"; 
				?>

			</div>
		</div>

		<div class="colunaDireita">
			<div class="bloco">
				<div align="center"><img src="Listas/imagens/carrinho.png" height="123px"></div>
			</div>
		</div>
	</div>

	<div class="rodape">
		<div style="width: 10%; float: left;"><img src="Listas/imagens/logoUFSM.svg"></div>
		<div style="width: 80%; float: left;vertical-align: center;">
			<h3><br>Matheus Machado<br>423 - 2019</h3>
		</div>
		<div style="width: 10%; float: left;"><img src="Listas/imagens/logoCTISM.svg"></div>
	</div>
</body>
</html>