<?php

class ContaCorrente{

	private $titular;

	private $agencia;

	private $numero;

	private $saldo;

	public function __construct($titular, $agencia, $numero, $saldo)
	{
		$this->titular = $titular;
		$this->agencia = $agencia;
		$this->numero = $numero;
		$this->saldo = $saldo;
	}

	public function sacar(float $valor)
	{
		$this->saldo -= $valor;
		return $this;
	}

	public function depositar(float $valor)
	{
		$this->saldo += $valor;
		return $this;
	}

	// public function getTitular()
	// {
	// 	return $this->titular;
	// }
	//
	// public function getSaldo()
	// {
	// 	return $this->saldo;
	// }

	public function setNumero($numero)
	{
		return $this->numero = $numero;
	}

	public function __get($atributo)
	{
	return $this->$atributo;
	}

	public function __set($atributo, $valor)
	{
		if($atributo=="titular" || $atributo == "saldo"){
			throw new Exception("Atributo privado");
		}else{
			$this->$atributo = $valor;
		}
	}
}
