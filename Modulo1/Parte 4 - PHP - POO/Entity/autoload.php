<?php

function load($namespace)
{
	$namespace = str_replace("\\","/",$namespace);

	$caminhoAbsoluto ="C:\Users\Denivas\CursoPHP\Modulo1\Parte 4 - PHP - POO"."/".$namespace.".php";

	return include_once $caminhoAbsoluto;
}

spl_autoload_register(__NAMESPACE__."\load");
 ?>
