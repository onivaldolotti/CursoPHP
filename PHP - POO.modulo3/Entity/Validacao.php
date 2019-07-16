<?php

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
			echo "O valor passado nao e numerico";
		}
	}
}
