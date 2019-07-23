<?php

namespace src;

class Validacao{

	public static function protegeAtributo($atributo)
	{
		if($atributo=="titular" || $atributo == "saldo"){
			throw new Exception("Atributo privado");
		}
	}

	public static function verificaNumero($valor)
	{
		if (!is_numeric($valor)) {
			throw new InvalidArgumentException("O valor nao e numero");
		}
	}
	public static function verificaValorNegativo($valor)
	{
		if($valor<0) {
			throw new Exception("Nao e permitido valor negativo");
		}
	}
}
