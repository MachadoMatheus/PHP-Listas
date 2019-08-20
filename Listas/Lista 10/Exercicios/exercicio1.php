<img src="">
<?php 
		include("../layouts.php");

		function desenharPaletas(array $paletas)
		{
			$arquivo = fopen('layout.svg', 'w+');
			$desenhoSeparado = explode("|", fread($arquivo, 30000));
			echo implode("|", $desenhoSeparado);

			foreach ($paletas as $paleta) {
				
			}
		}
		$arrayName = array('1' => 1);
		desenharPaletas($arrayName);

		$titulo = "Exercício 1";

		$layout = new layout();


		echo $layout->cabecalho($titulo, "Lorem Ipsum Dolor Sit Amet", "../estiloIndex.css");
		echo $layout->barra();
		echo $layout->corpo();
		echo $layout->rodape();
?>