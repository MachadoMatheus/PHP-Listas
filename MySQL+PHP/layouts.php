<?php
class layout
{
	public function cabecalho ($titulo)
	{
		return
		"<div class='cabecalho'>
		<a href='http://localhost/Pesquisa/' target='blank'>
		<h1>$titulo</h1>
		</a>
		</div>";
	}


	public function barra (array $links=null)
	{
		$barra =
		"<div class='barra'>
		<a href='http://localhost/Pesquisa/' target='blank'>Voltar</a>
		<a href='.''>Recarregar</a>";

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
		</div>";
	}
}
?>