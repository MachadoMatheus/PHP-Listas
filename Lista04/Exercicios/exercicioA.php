<!DOCTYPE html>
<html>
<head>
	<title>Exercício a(???)</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<?php 
/*a. Um cliente possui uma dívida de R$ 3.500,00. Ele pagou apenas R$
1.240,00. Baseado nessa afirmação escreva um programa para as seguintes
solicitações:
i. exiba na tela qual a porcentagem paga pelo cliente até o momento.
ii. qual a porcentagem da dívida inicial que ainda precisa ser paga?
iii. Verifique se a dívida estaria quitada caso o cliente pagasse mais R$
2.300,00*/
	$valDaDivida = 3500;
	$valPago = 1240;

	$porcPaga = round(($valPago / $valDaDivida)*100,2);

	echo "A porcentagem paga pelo cliente foi de $porcPaga%<br>";

	$porcNaoPaga = 100 - $porcPaga;

	echo "A porcentagem não paga é de $porcNaoPaga%<br>";

	if ($valPago + 2300 >= $valDaDivida) {
		echo "A dívida estaria quitada caso o cliente pagasse mais R$2.300,00";
	} else {
		echo "A dívida não estaria quitada caso o cliente pagasse mais R$2.300,00";
	}
	
?>
</body>
</html>