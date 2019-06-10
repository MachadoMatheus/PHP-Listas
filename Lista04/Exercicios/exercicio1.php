<!DOCTYPE html>
<html>
<head>
	<title>Exercício 1</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<?php 
/*1. Um cliente comprou um computador por R$ 1.570,00 e uma impressora
por R$ 320,00. Escreva um programa que exiba o total da compra realizada.*/
	$precoComputador = 1570;
	$precoImpressora = 320;

	echo("<table>

		<tr style = 'font-weight:bold'>
		<td>Nome</td>
		<td>Preço</td>
		</tr>
		<tr>
		<td>Computador</td>
		<td>$precoComputador</td>
		</tr>
		<tr>
		<td>Impressora</td>
		<td>$precoImpressora</td>
		</tr>

		</table>
		")
?>
</body>
</html>