<!DOCTYPE html>
<html>
<head>
	<title>Paletas de Cores</title>
	<link rel="stylesheet" type="text/css" href="paleta.css?version=12">
</head>
<body>
	<?php  
		$paletas = fopen("paletas.txt", "r");

		echo "<div class='cabecalho'><div>Paletas</div></div>";

		echo "<div class = 'botoes'>";
		while (!feof($paletas)) {
			$linha = fgets($paletas);
			$cores = explode(", ", $linha);
			$porcentagem = 100/count($cores);
			foreach ($cores as $cor) {
				echo ("<a href='$cor'><button style='background-color:$cor; width: $porcentagem%;'>$cor</button></a>");
			}
			echo "<br>";
		}
		echo "</div>";
	?>
</body>
</html>