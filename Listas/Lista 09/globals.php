<?php 
	$a = 100;
	$b = 150;

	function multiplicacao()
	{
		echo $GLOBALS['a']*$GLOBALS['b'];
	}

	multiplicacao();
?>