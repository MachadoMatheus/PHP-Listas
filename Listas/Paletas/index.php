<!DOCTYPE html>
<html>
<head>
	<title>Paletas de Cores</title>
	<link rel='stylesheet' type='text/css' href='paleta.css?version=12'>
	<link href='https://fonts.googleapis.com/css?family=Acme|Indie+Flower&display=swap' rel='stylesheet'>
</head>
<body>
	<script type='text/javascript'>
		function copy(id) {
			/* Get the text field */
			var copyText = document.getElementById(id);

			/* Select the text field */
			copyText.select();

			/* Copy the text inside the text field */
			document.execCommand('copy');
		} 
	</script>	
	<div class='cabecalho'>Paletas</div>
	<div class='paletaImagem'>
		<table>
			<tr>
				<td>
					<div class='imagem'>
						<img src='https://MachadoMatheus.github.io/Imagens/LogosByNick/summer-color-palette-hex-600x600.png'>
					</div>
				</td>
				<td>
					<div class='texto'>
						<div class='cor'>
							<input type='text' id='01' value='#F3A001'>
							<button onclick="copy('01')" style='background-color: #F3A001'></button>
						</div>
						
						<div class='cor'>
							<input type='text' id='02' value='#CCCCF4'>
							<button onclick="copy('02')" style='background-color: #CCCCF4'></button>
						</div>

						
						<div class='cor'>
							<input type='text' id='03' value='#0077C5'>
							<button onclick="copy('03')" style='background-color: #0077C5'></button>
						</div>

						
						<div class='cor'>
							<input type='text' id='04' value='#313853'>
							<button onclick="copy('04')" style='background-color: #313853'></button>
						</div>

						
					</div>
				</td>
			</tr>

			<tr>
				<td>
					<div class='imagem'>
						<img src='https://MachadoMatheus.github.io/Imagens/LogosByNick/tropical-bird-color-palette-600x600.png'>
					</div>
				</td>
				<td>
					<div class='texto'>
						<div class='cor'>
							<input type='text' id='11' value='#4F2D20'>
							<button onclick="copy('11')" style='background-color: #4F2D20'></button>
						</div>
						
						<div class='cor'>
							<input type='text' id='12' value='#FF9D1E'>
							<button onclick="copy('12')" style='background-color: #FF9D1E'></button>
						</div>
						
						<div class='cor'>
							<input type='text' id='13' value='#019FD3'>
							<button onclick="copy('13')" style='background-color: #019FD3'></button>
						</div>
						
						<div class='cor'>
							<input type='text' id='14' value='#BEE600'>
							<button onclick="copy('14')" style='background-color: #BEE600'></button>
						</div>
						
					</div>
				</td>
			</tr>
		</table>

	</div>

	<?php  
	$paletas = fopen('paletas.txt', 'r');

	while (!feof($paletas)) {
		$linha = fgets($paletas);
		$cores = explode(', ', $linha);

	}
	?>
</body>
</html>