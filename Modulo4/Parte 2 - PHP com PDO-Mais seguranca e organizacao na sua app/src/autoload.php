<?php

require_once 'classes/config.php';

function load($namespace)
{
	if(file_exists('classes/'.$namespace.'.php')) {
		require_once 'classes/'.$namespace.'.php';
	}
}

spl_autoload_register('load');
