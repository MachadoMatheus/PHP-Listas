<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Exercício 1</title>
	<link rel="stylesheet" type="text/css" href="estilo.css?version=13">
</head>
<body> 
<!--1) Escreva um programa/crie uma página para receber, através de um
formulário HTML, as seguintes informações de usuários:
- Nome
- Sobrenome
- CPF
- Estado civil
- Email
- Senha
- Telefone
- Endereço
- Complemento
- Cidade
- Estado
- País
Imprima na tela as informações obtidas.-->
	<?php 
		$nome = $_POST["nome"];
		$sobrenome = $_POST["sobrenome"];
		$cpf = $_POST["cpf"];
		$eCivil = $_POST["eCivil"];
		$email = $_POST["email"];
		$senha = $_POST["senha"];
		$telefone = $_POST["telefone"];
		$endereco = $_POST["endereco"];
		$complemento = $_POST["complemento"];
		$cidade = $_POST["cidade"];
		$estado = $_POST["estado"];
		$pais = $_POST["pais"];



		echo "

		Nome: <br>
		$nome <br><br>
		Sobrenome <br>
		$sobrenome <br><br>
		CPF <br>
		$cpf <br><br>
		Estado Civil <br>
		$eCivil <br><br>
		E-mail <br>
		$email <br><br>
		Senha <br>
		$senha <br><br>
		Telefone <br>
		$telefone <br><br>
		Endereco <br>
		$endereco <br><br>
		complemento <br>
		$complemento <br><br>
		Cidade <br>
		$cidade <br><br>
		Estado <br>
		$estado <br><br>
		Pais <br>
		$pais <br><br>";
	?>
</body>
</html>