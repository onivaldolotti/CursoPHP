<?php

function load($namespace)
{
	$namespace = str_replace("\\","/",$namespace);

	$caminhoAbsoluto ="C:\Users\Denivas\CursoPHP\PHP - POO.modulo4"."/".$namespace.".php";

	return include_once $caminhoAbsoluto;
}

spl_autoload_register(__NAMESPACE__."\load");
 ?>
