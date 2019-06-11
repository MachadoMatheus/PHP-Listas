<!DOCTYPE html>
<html>
<head>
	<title>Paletas de Cores</title>
	<link rel="stylesheet" type="text/css" href="paleta.css?version=12">
</head>
<body>
	<?php  

		$cores = array("#000000", "#009B89", "#8FE900", "#FF0000", "#890000", "#F3F3F3", "#191B1B", "#002E33", "#00506C", "#008DB1", "#00CEFA", "#EDEDED");

		echo "<div class='cabecalho'><div>Paletas</div></div>";

		echo "<div class = 'botoes'>";
		for ($i=0; $i < count($cores); $i++) { /*Elimina as pastas "." e ".."*/
			$nomeCor = $cores[$i];
			echo ("<a href='$nomeCor'><button style='background-color:$nomeCor'>$nomeCor</button></a>");
		}
		echo "</div>"; 

	?>
</body>
</html>