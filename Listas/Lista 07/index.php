<!DOCTYPE html>
<html>
<head>
	<title><?php echo basename(__DIR__)." de PHP"; ?></title>
	<link rel="stylesheet" type="text/css" href="estiloIndex.css?version=12">
</head>
<body> 

	<?php 

		echo "<div class='cabecalho'>

		<div>".basename(__DIR__)." de PHP</div>


		</div>";

		$pastaExercicios = "Exercicios/";
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
</body>
</html>