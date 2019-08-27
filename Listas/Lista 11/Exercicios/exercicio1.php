<?php 
		/*Crie uma função que converta radianos em graus. Nota: graus = ângulo em radianos *180/PI;*/
		include("../layouts.php");

		function radToGraus($rad)
		{
			return $rad*180/M_PI;
		}

		if (isset($_POST) && !empty($_POST)) {
			$rad = $_POST['rad'];
			$graus = radToGraus($rad);
			$conteudoEsquerda[] = round($rad, 2)." radianos valem ".round($graus, 2)." graus";
		}



		$titulo = "Exercício 1";

		$layout = new layout();

		$conteudoEsquerda[] = "<form action='".$_SERVER["PHP_SELF"]."' method='POST'>
		<label for='rad'><div class='textTitulo'>Digite um valor em radianos</div></label>
		<input type='number' name='rad' id='rad' placeholder='Ex.: 50' required='required'>
		<input type='submit' value='Enviar'>
		</form>";

		echo $layout->cabecalho($titulo, null, "../estiloIndex.css");
		echo $layout->barra();
		echo $layout->corpo($conteudoEsquerda);
		echo $layout->rodape();
?>