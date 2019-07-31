<?php
class funcoes
{
	public function ordenarPaleta(array $paleta)
	{
		foreach ($paleta as $cor) {
			$vermelho = hexdec(substr($cor, 1, 2));
			$verde = hexdec(substr($cor, 3, 2));
			$azul = hexdec(substr($cor, 5, 2));

			$luminosidades[] = ($vermelho * 299 + $verde * 587 + $azul * 114) / 1000;
		}

		asort($luminosidades);

		foreach ($luminosidades as $posicao => $luminosidade) {
			$paletaOrdenada[] = $paleta[$posicao];
		}

		return $paletaOrdenada;
	}

	public function ordenarPaletas()
	{
		$nomeArquivo = 'paletas.txt';
		$arquivo = fopen($nomeArquivo, 'r');
		while (!feof($arquivo)) {
			$paleta = explode(', ', fgets($arquivo));
			$paletas[] = $paleta;
		}
		foreach ($paletas as $paleta) {
			$paletaOrdenada = ordenarPaleta($paleta);
			$paletasOrdenadas[] = $paletaOrdenada;
		}
		return $paletasOrdenadas;
	}

	public function paletasComImagem (array $paletas)
	{
		echo
		"<div class='paletaImagem'>
		<table>";
		foreach ($paletas as $imagem => $paleta) {
			echo
			"<tr>
			<td>
			<div class='imagem'>
			<img src=$imagem>
			</div>
			</td>
			";

			echo
			"<td>
			<div class='texto'>";

			$paleta = explode(', ', $paleta);
			$i = 0;
			$j = 0;

			$cores = funcoes::ordenarPaleta($paleta);
			foreach ($cores as $cor) {
				echo
				"<div class='cor'>
				<input type='text' id='[$i][$j]' value='$cor'>
				<button onclick=\"copy('[$i][$j]')\"style='background-color: $cor'></button>
				</div>";
				$j++;
			}
			$i++;
			echo
			"</td>
			</tr>";
		}
		echo "</table>";
	}

	public function paletaSemImagem(string $paletas)
	{

	}
}
?>