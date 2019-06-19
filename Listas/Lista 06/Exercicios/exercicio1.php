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
<div class="fundoForm">

		<b style="font-size: 30px;">Formulário PHP</b><br>

		<b>OBS.:Não deixe nada em branco</b><br><br>
		<form method="POST" action="exercicio2.php">
			<label for="nome">Nome</label>	<br>
			<input type="text" id="nome" name="nome" size="20" placeholder="Digite o seu nome..">	<br>	
			<label for="sobrenome">Sobrenome</label>	<br>
			<input type="text" id="sobrenome" name="sobrenome"	size="20" placeholder="Digite o seu sobrenome..">	<br>
			<label for="senha">Senha</label>	<br>
			<input type="password" id="senha" name="senha" placeholder="Digite a sua senha..">	<br>
			<label for="genero">Gênero</label>	<br>
			<input type="text" id="genero" name="genero" placeholder="Informe o seu gênero">	<br>
			<label for="idade">Idade</label>	<br>
			<input type="number" id="idade" name="idade" placeholder="Informe a sua idade">	<br>
			Preferências de Lazer	<br>
			<input type="checkbox" name="preferencias[]" value="Viagem"> Viagem	<br>
			<input type="checkbox" name="preferencias[]" value="Mergulho"> Mergulho	<br>
			<input type="checkbox" name="preferencias[]" value="Navegação na Internet"> Navegação na Internet	<br>
			<input type="checkbox" name="preferencias[]" value="Games"> Videogame	<br>
			<input type="checkbox" name="preferencias[]" value="Ciclismo"> Ciclismo	<br>
			<input type="checkbox" name="preferencias[]" value="Atletismo"> Atletismo	<br>
			<input type="checkbox" name="preferencias[]" value="Pesca"> Pesca	<br>

			<input type="submit" name="Enviar">
		</form>
	</div>
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