<?php 
	$a = 100;
	$b = 150;

	function soma($a, $b)
	{
		$c = ($a + 1) + $b;
		echo "Valor da Função: ".$c."<br><br>";
	}

	soma($a, $b);
	echo "Valor fora da Função: ".$c."<br><br>";
?>