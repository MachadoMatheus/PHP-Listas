<!DOCTYPE html>
<html>
<head>
	<title>Exercício 11</title>
	<link rel="stylesheet" type="text/css" href="estilo.css?version=14">
</head>
<body>
<?php 
/*11) Escreva um programa que imprima na tela os números de 1 a 300
que são múltiplos de 5 e de 4 (os dois ao mesmo tempo).*/
	for ($i=1; $i <= 300; $i++) { 
		if ($i % 5 == 0) {
			$multiplosDeCinco[] = $i; 
		}

		if ($i % 4 == 0) {
			$multiplosDeQuatro[] = $i;
		}
	}
	
	echo "
	</div>
	<ol>";

	echo "<div class = 'box'>";

	echo "Múltiplos de 5: ";
	foreach ($multiplosDeCinco as $value) {
		echo "<li>".$value."</li>";
	}

	echo "
	</ol>
	</div>";

	echo "
	</div>
	<ol>";

	echo "<div class = 'box'>";

	echo "Múltiplos de 4: ";
	foreach ($multiplosDeQuatro as $value) {
		echo "<li>".$value."</li>";
	}

	echo "
	</ol>
	</div>";
?>
</body>
</html>