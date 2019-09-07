<?php
function Ola()
{
	$vet = func_get_args();
	$cont = func_num_args();
	for ($i=0;$i<$cont;$i++)
		echo 'Olá '.$vet[$i]."<br>";
}
Ola('Renata','Paulo','Beatriz','Marcelo');
?>