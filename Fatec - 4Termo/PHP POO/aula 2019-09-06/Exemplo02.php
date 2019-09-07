<?php
function km2mi($quilometros)
{
	static $total;
	$total += $quilometros;
	echo "percorreu mais $quilometros do total de $total <br>";
	return $quilometros * 0.6;
}
echo 'percorreu '.km2mi(100).' milhas <br>';
echo 'percorreu '.km2mi(200).' milhas <br>';

?>