<?php 
		include("../layouts.php");

		if (isset($_POST) && !empty($_POST)) {
			$nomeAnterior = $_POST['nome'];
			$telAnterior = $_POST['tel'];
			$emailAnterior = $_POST['email'];

			setcookie("email", "$emailAnterior", time()+3600);
			setcookie("tel", "$telAnterior", time()+3600);
			setcookie("nome", "$nomeAnterior", time()+3600);
		} elseif (isset($_COOKIE['email']) && isset($_COOKIE['tel']) && isset($_COOKIE['nome'])) {
			$nomeAnterior = $_COOKIE['nome'];
			$telAnterior = $_COOKIE['tel'];
			$emailAnterior = $_COOKIE['email'];
		} else {
			$nomeAnterior = "Digite um nome aqui...";
			$telAnterior = "Digite um telefone aqui...";
			$emailAnterior = "Digite um email aqui...";
		}
		

		$conteudoEsquerda[] = "<form action='".$_SERVER["PHP_SELF"]."' method='POST'>
		<label for='nome'><div class='textTitulo'>Nome</div></label>
		<input type='text' name='nome' id='nome' placeholder='Ex.:$nomeAnterior' required='required'>
		<label for='tel'><div class='textTitulo'>Telefone</div></label>
		<input type='number' name='tel' id='tel' placeholder='Ex.:$telAnterior' required='required'>
		<label for='email'><div class='textTitulo'>Email</div></label>
		<input type='email' name='email' id='email' placeholder='Ex.:$emailAnterior' required='required'>
		<input type='submit' value='Enviar'>
		</form>";

		$titulo = "Exercício 4";

		$layout = new layout();


		echo $layout->cabecalho($titulo, null, "../estiloIndex.css");
		echo $layout->barra();
		echo $layout->corpo($conteudoEsquerda);
		echo $layout->rodape();
?>