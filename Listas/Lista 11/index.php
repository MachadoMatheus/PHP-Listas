<?php 
	include("desenho.php");
	include("layouts.php");
	$titulo = "Cookies2.0";
	setcookie("paginaInicial", $_SERVER['PHP_SELF'], time()+3600);
	function desenhar()
		{
			$largura = "24.85%";
			$altura = "";
			$desenho = new Desenho();
			$links = "";

			$arquivoPaletas = fopen("paletas.txt", "r");
			while (!feof($arquivoPaletas)) {
				$linha = fgets($arquivoPaletas);
				$paleta = explode(", ", $linha);
				$paletas[] = $paleta;
			}

			foreach ($paletas as $paleta) {
				$fundoClaro = "ffffff";
				foreach ($paleta as $tipo => $cor) {
					switch ($tipo) {
						case 0:
							$fundoPadrao = $cor;
							break;
						case 1:
							$fundoEscuro = $cor;
							break;
						case 2:
							$fundoBackGround = $cor;
							break;
						case 3:
							$fundoClaro = $cor;
							break;
					}
				}

				$links =$links."<a href='".$_SERVER["PHP_SELF"]."?fundoPadrao=$fundoPadrao&fundoEscuro=$fundoEscuro&fundoBackGround=$fundoBackGround&fundoClaro=$fundoClaro'>".$desenho->desenharModeloFundo($largura, $altura, "#".$fundoPadrao, "#".$fundoEscuro, "#".$fundoBackGround, "#".$fundoClaro)."</a>";
			}
			return $links."";
		}

		function alterarCSS()
		{
			$desenho = new Desenho();
			$fundoPadrao = "#".$_GET['fundoPadrao'];
			$fundoEscuro = "#".$_GET['fundoEscuro'];
			$fundoBackGround = "#".$_GET['fundoBackGround'];
			$fundoClaro = "#".$_GET['fundoClaro'];

			$css = fopen('estiloIndex.css', 'w');
			fwrite($css, $desenho->alterarCSS($fundoPadrao, $fundoEscuro, $fundoBackGround, $fundoClaro));
		}

		if (isset($_GET) && !empty($_GET)) {
			alterarCSS();
		}

		$pastaExercicios = "Exercicios/";
		$arquivosPasta = scandir($pastaExercicios);
				
		//Ordenar o array para a 'ordem natural'
		usort($arquivosPasta, 'strnatcmp');

		$paginas =  "<div class = 'botoes'>";
		for ($i=2; $i < count($arquivosPasta); $i++) { /*Elimina as pastas "." e ".."*/
				$nomeArquivo = $arquivosPasta[$i];
			$paginas = $paginas.("<a href='$pastaExercicios$nomeArquivo'><button style='width:25%;'>$nomeArquivo</button></a>");
		}
		$paginas = $paginas."</div>";
		
		$conteudoEsquerda[] = $paginas;
		$conteudoEsquerda[] = "<h1>Escolha uma das cores dentre as abaixo:</h1><br>".desenhar();

		$layout = new layout();

		echo $layout->cabecalho($titulo, null, "estiloIndex.css");
		echo $layout->barra();
		echo $layout->corpo($conteudoEsquerda);
		echo $layout->rodape();
?>