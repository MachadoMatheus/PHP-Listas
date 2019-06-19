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
	<div class="fundoForm">
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
			echo "<div class='textTitulo'>Bem-vindo ao sistema<br></div>";
			$lista = substr($_SERVER['PHP_SELF'], 0, 28);
			echo "<a href='$lista'><button style='float: right;''>Voltar ao Menu Principal</button></a>";
		} else {
			echo "<div class='textTitulo'>Usuário não autorizado<br></div>";
			echo "<a href='exercicio5.html'><button style='float: right;''>Voltar</button></a>";
		}
	?>
	
	</div>
</body>
</html>