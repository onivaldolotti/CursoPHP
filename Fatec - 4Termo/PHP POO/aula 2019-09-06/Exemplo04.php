<?php
function Incrementa(&$x, $valor)
{
	$x += $valor;
	echo 'x = '.$x.'<br>';
}
$a = 10;
Incrementa($a, 20);
echo 'a = '.$a;
?>