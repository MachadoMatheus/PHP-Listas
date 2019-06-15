<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Exercício 5</title>
	<link rel="stylesheet" type="text/css" href="estilo.css?version=19">
</head>
<body> 
<!--5) Escreva um programa para validar o acesso de um usuário ao
sistema. Os dados de validação devem ser lidos de um arquivo texto,
em que o usuário é admin e a senha é: 12345. Caso o usuário
informado em um formulário HTML seja válido, deverá ser exibida a
mensagem
“Bem-vindo ao sistema”. Caso seja inválido a mensagem
deve ser: “Usuário não autorizado” .-->
	<?php 
		$usuario = $_POST["usuario"];
		$senhaUsuario = $_POST["senhaUsuario"];

		$arquivo = fopen("exercicio5.txt", "r");

		while (!feof($arquivo)) {
			$linha  = fgets($arquivo, 4096);

			$dados = explode(" = ", $linha);

			$validacao[0] = "nope";
			if ($dados[0] == "usuario" && $dados[1] == $usuario) {
				$validacao[0] = true;
			} else if ($dados[0] == "senha" && $dados[1] == $senhaUsuario) {
				$validacao[1] = true;
			}
		}
		fclose($arquivo);

		$i = 0;
		foreach ($validacao as $value) {
			if ($value) {
				$i++;
			}
		}

		if ($i == 2) {
			echo "Bem-vindo ao sistema<br>";
		} else {
			echo "Usuário não autorizado<br>";
		}

		echo "<a href = 'exercicio5.html'>Voltar</a>";
	?>
</body>
</html>