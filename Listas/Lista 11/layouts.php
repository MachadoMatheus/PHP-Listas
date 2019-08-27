<?php 
	class layout
	{
		public function cabecalho ($tituloPagina = null, $tituloCabecalho = null, $caminhoEstilo = null)
		{
			$nomeProjeto = "Cookies 2.0";

			if (is_Null($tituloPagina)) {
				$tituloPagina = $nomeProjeto;
			}
			$cabecalho = "<!DOCTYPE html><html lang='pt-br'><head><title>$tituloPagina</title><link href='http://MachadoMatheus.github.io/favicon.ico' rel='shortcut icon' type='image/x-icon' /> <script type='text/javascript' src='http://livejs.com/live.js'></script>";


			if (is_Null($caminhoEstilo)) {
				$caminhoEstilo = "https://MachadoMatheus.github.io/globalLayout.css";
			}
			$cabecalho = $cabecalho."<link rel='stylesheet' type='text/css' href='$caminhoEstilo'>";


			if (is_Null($tituloCabecalho)) {
				$tituloCabecalho = $nomeProjeto;
			}
			$cabecalho = $cabecalho."
				<link href='https://fonts.googleapis.com/css?family=Oswald:300|Indie+Flower&display=swap' rel='stylesheet'>
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
				$corpo = $corpo."<div class='bloco' align='center'><img src='https://machadomatheus.github.io/Vetores/Feitos/carvao.svg' height='123px'></div>";
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