<?php 
class funcoes
{
	public function paletaComImagem (array $paletas) 
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

			$cores = explode(', ', $paleta);
			$i = 0;
			$j = 0;
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

	public function paletaGradiente(string $paletas)
	{
		
	}
}
?>