<?php 
	$tam = 4;
	for ($i=0; $i < $tam; $i++) { 
		for ($j=0; $j < $tam; $j++) { 
			$matriz[$i][$j] = ($i*4)+$j;
			echo $matriz[$i][$j]."<br>";
		}
	}
?>