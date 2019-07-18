<?php

class ArrayUtils
{
	public static function remover(string $elemento, array &$array)
	{
		array_search($elemento, $array);
		var_dump($posicao);
	}
}
