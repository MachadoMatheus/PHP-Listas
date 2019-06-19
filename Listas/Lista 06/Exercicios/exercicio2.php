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

		$conteudo = 
"Nome: $nome
Sobrenome: $sobrenome 
Senha: $senha
Gênero: $genero
Idade: $idade
Preferências de lazer: $pref";

		$arquivo = fopen("saidaExercicio2.txt", "w");

		fwrite($arquivo, $conteudo);
		fclose($arquivo);

		header("Location: exercicio3.php");
?>