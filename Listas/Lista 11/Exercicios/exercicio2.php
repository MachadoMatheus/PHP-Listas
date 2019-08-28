<?php 
		/*Crie um formulário de login para autenticação e mantenha os dados de login do usuário por meia hora, mesmo depois de o usuário ter fechado o navegador;*/
		include("../layouts.php");
		$conteudoDireita = null;

		if (isset($_POST) && !empty($_POST)) {
			$nomeLogin = $_POST['nome'];
			$idadeLogin = $_POST['idade'];
			$senhaLogin = $_POST['senha'];

			$senhaLogin = password_hash($senhaLogin, PASSWORD_BCRYPT);

			setcookie("nome", "$nomeLogin", time()+3600);
			setcookie("idade", "$idadeLogin", time()+3600);
			setcookie("senha", $senhaLogin, time()+3600);
		} elseif (isset($_COOKIE['nome']) && isset($_COOKIE['idade']) && isset($_COOKIE['senha'])) {
			$nomeLogin = $_COOKIE['nome'];
			$idadeLogin = $_COOKIE['idade'];
			$senhaLogin = $_COOKIE['senha'];
		} 

		if (isset($nomeLogin) && isset($idadeLogin) && isset($senhaLogin)) {
			$conteudoDireita[] = "<b>Usuário Logado:</b> $nomeLogin<br><b>Idade:</b> $idadeLogin<br> <b>Hash da senha:</b <br><div style='font-size:12px;'>$senhaLogin</div>";
		}



		$titulo = "Exercício 2";

		$layout = new layout();

		$conteudoEsquerda[] = "<h1>Login:</h1><form action='".$_SERVER["PHP_SELF"]."' method='POST'>
		<label for='nome'><div class='textTitulo'>Nome</div></label>
		<input type='text' name='nome' id='nome' placeholder='Ex.: Natália' required='required'>
		<label for='idade'><div class='textTitulo'>Idade</div></label>
		<input type='number' name='idade' id='idade' placeholder='Ex.: 16' required='required'>
		<label for='senha'><div class='textTitulo'>Senha</div></label>
		<input type='password' name='senha' id='senha' placeholder='Ex.: senha123' required='required'>
		<input type='submit' value='Enviar'>
		</form>";

		echo $layout->cabecalho($titulo, null, "../estiloIndex.css");
		echo $layout->barra();
		echo $layout->corpo($conteudoEsquerda, $conteudoDireita);
		echo $layout->rodape();
?>