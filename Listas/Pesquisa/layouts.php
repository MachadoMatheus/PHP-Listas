<?php 
	class layout
	{
		public function cabecalho ($tituloCabecalho, $tituloPagina = null, $caminhoEstilo = null)
		{
			$cabecalho = "<!DOCTYPE html><html lang='pt-br'><head>";
			if (is_Null($tituloPagina)) {
				$cabecalho = $cabecalho."<title>Lojinha do PHP</title>";
			} else {
				$cabecalho = $cabecalho."<title>".$tituloPagina."P</title>";
			}

			if (is_Null($caminhoEstilo)) {
				$cabecalho = $cabecalho."<link rel='stylesheet' type='text/css' href='https://MachadoMatheus.github.io/globalLayout.css'>";
			} else {
				$cabecalho = $cabecalho."<link rel='stylesheet' type='text/css' href='$caminhoEstilo'>";
			}

			$cabecalho = $cabecalho."
				<link href='https://fonts.googleapis.com/css?family=Acme|Indie+Flower&display=swap' rel='stylesheet'>
				<meta charset='utf-8'>
			</head>
			<body> 
				<div class='cabecalho'>
					<h1>$tituloCabecalho</h1>
					</a>
			</div>";
			return $cabecalho;
		}
	

		public function barra (array $links=null)
		{
			$barra = 
				"<div class='barra'>
					<a href='http://github.com/MachadoMatheus' target='blank'>GitHub</a>";

			if (!is_Null($links)) {
				foreach ($links as $nomePagina => $link) {
					if (is_link($link)) {
						$barra = $barra."<a href='$link''>$nomePagina</a>";
					}
					
				}
			}
			return $barra."</div>";
		}

		public function corpo (array $conteudoEsquerda = null, array $conteudoDireita = null)
		{
			$corpo = "<div class='corpo'>";

			$corpo = $corpo."<div class='colunaEsquerda'>";
			if (!is_Null($conteudoEsquerda)) {
				foreach ($conteudoEsquerda as $bloco) {
					$corpo = $corpo."<div class='bloco'>$bloco</div>";
				}
			}
			$corpo = $corpo."</div>";

			$corpo = $corpo."<div class='colunaDireita'>";
			if (!is_Null($conteudoDireita)) {
				foreach ($conteudoDireita as $bloco) {
					$corpo = $corpo."<div class='bloco'>$bloco</div>";
				}
			} else {
				$corpo = $corpo."<div class='bloco' align='center'><img src='https://machadomatheus.github.io/Vetores/Achados/Smiley.svg' height='123px'></div>";
			}
			$corpo = $corpo."</div>";

			return $corpo."</div>";
		}

		public function rodape ()
		{
			return 
	"<div class='rodape'>
		<div style='width: 10%; float: left;''><img src='https://machadomatheus.github.io/Vetores/Achados/logoUFSM.svg'></div>
		<div style='width: 80%; float: left;vertical-align: center;'>
			<h3><br>Matheus Machado<br>423 - 2019</h3>
		</div>
		<div style='width: 10%; float: left;''><img src='https://machadomatheus.github.io/Vetores/Achados/logoCTISM.svg'></div>
	</div>
</body>
</html>";
		}
	}
?>