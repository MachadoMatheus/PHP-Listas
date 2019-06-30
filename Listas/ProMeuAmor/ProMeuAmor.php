<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Pro Meu Amor</title>
	<link rel="stylesheet" type="text/css" href="ProMeuAmor.css">
</head>
<body>
	<?php
	$nome = $_POST["nome"]; /*O que tu coloca dentro dos parenteses é a palavra que tu colocou no "name" do atributo lá no formulário :P*/
	$email = $_POST["email"];
	$senha = $_POST["senha"];
	$sexo = $_POST["sexo"];
	$estado = $_POST["estado"];
	$interesses = $_POST["interesses"]; /*Cuidado nos que dá pra marcar mais de um (no caso acho que só o "checkbox") que ele retorna um vetor, não uma variável normal Se a pessoa não marcar nenhum vai dar erro na hora de pegar o vetor. Só pra avisar :P*/
	$observacao = $_POST["obs"];

	echo "<b>Coisas básicas:</b><br>
		Nome: <br>
		$nome <br><br>
		E-mail <br>
		$email <br><br>
		Senha <br>
		$senha <br><br>
		Sexo <br>
		$sexo <br><br>
		Estado <br>
		$estado <br><br>
		Observação <br>
		$observacao <br><br>
		";

	/*Três maneiras de percorrer um vetor*/
	for ($i=0; $i < count($interesses); $i++) { /*O count retorna o número de coisas dentro do vetor*/
		echo "Percorrendo o vetor com for<br>";
	}

	foreach ($interesses as $value) {
		echo "Percorrendo o vetor com foreach<br>";
	}

	foreach ($interesses as $key => $value) {
		echo "key = $key, value = $value, ";
	}

	
	?>
</body>
</html>