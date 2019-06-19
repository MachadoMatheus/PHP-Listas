<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Exercício 1</title>
	<link rel="stylesheet" type="text/css" href="estilo.css?version=13">
</head>
<body>
<!--1) Crie uma tela de login onde o usuário coloque a senha. A
senha deve ser criptografada e validada. Repita a tela
para todas as formas de criptografia vista em aula (MD5
e base64).-->
	<div class="fundoForm">
	<?php 
		$usuario = $_POST["user"];
		$senhaUsuario = $_POST["senha"];

		$arquivo = fopen("exercicio1.txt", "w");
		fwrite($arquivo, "usuario = Natheus
senha = a0ed7e");
		fclose($arquivo);

		$arquivo = fopen("exercicio1.txt", "r");

		while (!feof($arquivo)) {
			$linha  = fgets($arquivo, 4096);

			$dados = explode(" = ", $linha);

			$senhaCripto = md5($senhaUsuario);

			$validacao[0] = "nope";
			if ($dados[0] == "usuario" && $dados[1] == $usuario) {
				$validacao[0] = true;
			} else if (($dados[0] == "senha") && $senhaCripto == md5($dados[1])) {
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
			$path = $_SERVER['SCRIPT_FILENAME'];
			$path_parts = pathinfo($path);

		if ($i == 2) {
			echo "<div class='textTitulo'>Bem-vindo ao sistema<br></div>";
			$path = $_SERVER['DOCUMENT_ROOT'];
			echo "<a href='$path'><button style='float: right;''>Voltar ao Menu Principal</button></a>";
		} else {
			echo "<div class='textTitulo'>Usuário não autorizado<br></div>";
			echo "<a href='exercicio1.html'><button style='float: right;''>Voltar</button></a>";
		}
	?>
	</div>
</body>
</html>