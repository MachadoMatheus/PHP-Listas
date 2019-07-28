<!DOCTYPE html>
<html>
<head>
	<title>Paletas de Cores</title>
	<link rel="stylesheet" type="text/css" href="paleta.css?version=12">
	<link href="https://fonts.googleapis.com/css?family=Acme|Indie+Flower&display=swap" rel="stylesheet">
</head>
<body>
	<script type="text/javascript">
		function myFunction(color) {
			/* Get the text field */
			var copyText = document.getElementById("myInput");

			/* Select the text field */
			color.select();

			/* Copy the text inside the text field */
			document.execCommand("copy");

			/* Alert the copied text */
			alert("Copied the text: " + copyText.value);
		} 
	</script>	
	<div class="cabecalho">Paletas</div>
	<div class="botoes">
		<?php  
		$paletas = fopen("paletas.txt", "r");

		while (!feof($paletas)) {
			$linha = fgets($paletas);
			$cores = explode(", ", $linha);
			$porcentagem = 100/count($cores);
			foreach ($cores as $cor) {
				echo ("<a href='$cor'><button style='background-color:$cor; width: $porcentagem%;'>$cor</button></a>");
			}
			echo "<br>";
		}
		?>
	</div>

	<div class="pastas">
		<br>
		<span style="color: gray">LOGOS</span><span>BY</span><span style="color: gray">NICK</span>

		<?php  

		?>
	</div>
	
</body>
</html>