<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Exercício 1</title>
	<link rel="stylesheet" type="text/css" href="estilo.css?version=13">
</head>
<body> 
<!--2) Escreva um programa/crie uma página para receber, através de um
formulário HTML, e gravar em um arquivo texto, as seguintes
informações de usuários.
- Nome
- Sobrenome
- Senha
- Gênero
- Idade
- Preferências de lazer (com as possíveis opções)
- Viagem
- Mergulho
- Navegação na Internet
- Videogame
- Ciclismo
- Atletismo
- Pesca-->
	<?php 
		$nome = $_POST["nome"];
		$sobrenome = $_POST["sobrenome"];
		$senha = $_POST["senha"];
		$genero = $_POST["genero"];
		$idade = $_POST["idade"];
		$preferencias = $_POST["preferencias"];

		$pref = "";
		for ($i=0; $i < count($preferencias); $i++) { 
			if ($i == count($preferencias) - 1) {
				$pref = $pref.$preferencias[$i].".";
			} else {
				$pref = $pref.$preferencias[$i].", ";
			}
		}

		$conteudo = "- Nome: $nome
- Sobrenome: $sobrenome 
- Senha: $senha
- Gênero: $genero
- Idade: $idade
- Preferências de lazer: $pref";

		$arquivo = fopen("saidaExercicio2.txt", "w");

		fwrite($arquivo, $conteudo);
		fclose($arquivo);
	?>
</body>
</html>