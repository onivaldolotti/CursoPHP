<?php
function Incrementa(&$x, $valor=40)
{
	$x += $valor;
}
$a = 10;
Incrementa($a);
echo 'a = '.$a;
?>