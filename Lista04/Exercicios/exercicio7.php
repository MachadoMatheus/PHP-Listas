<!DOCTYPE html>
<html>
<head>
	<title>Exercício 7</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<?php 
/*7. Um fazendeiro tinha 850 cabeças de gado, avaliadas em R$ 2.350,00
cada. Atualmente ele possui o triplo de cabeças de gado. Escreva um programa
que exiba o valor total de seu rebanho, sendo que agora cada cabeça de gado
está avaliada na metade do valor antigo.
Verifique, também, se o fazendeiro teve lucro ou não*/
	$gado["ini"]["quant"] = 850;
	$gado["ini"]["val"] = 2350;
	$gado["ini"]["total"] = $gado["ini"]["quant"] * $gado["ini"]["val"];

	$gado["fim"]["quant"] = $gado["ini"]["quant"] * 3;
	$gado["fim"]["val"] = $gado["ini"]["val"] / 2;
	$gado["fim"]["total"] = $gado["fim"]["quant"] * $gado["fim"]["val"];

	echo ("
		<table>

		<tr style = 'font-weight:bold'>
		<td style = 'border: 0px;'> </td>
		<td>Número de Cabeças</td>
		<td>Preço por Cabeça</td>
		<td>Valor Total</td>
		</tr>
		
		<tr>
		<td style = 'font-weight:bold'>Início</td>
		<td>".$gado["ini"]["quant"]."</td>
		<td>".$gado["ini"]["val"]."</td>
		<td>".number_format($gado["ini"]["total"], 2, ",", ".")." R$</td>
		</tr>

		<tr>
		<td style = 'font-weight:bold'>Final</td>
		<td>".$gado["fim"]["quant"]."</td>
		<td>".$gado["fim"]["val"]."</td>
		<td>".number_format($gado["fim"]["total"],2,",",".")." R$</td>
		</tr>

		</table>
		");

	if ($gado["fim"]["total"] > $gado["ini"]["total"]) {
		echo "<br><br>No fim das contas, o fazendeiro teve lucro de ".number_format($gado["fim"]["total"] - $gado["ini"]["total"],2, ",", ".")." R$";
	} else {
		echo "<br><br>No fim das contas, o fazendeiro não obteve lucro";
	}

?>
</body>
</html>