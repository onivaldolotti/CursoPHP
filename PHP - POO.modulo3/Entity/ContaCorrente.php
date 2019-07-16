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

	public function transferir($valor,ContaCorrente $conta)
	{
		Validacao::verificaNumero($valor);
		$this->sacar($valor);
		$conta->depositar($valor);
		return $this;
	}

	public function __toString()
	{
		return "O titular da Conta: ".$this->titular." Seu saldo atual: ".$this->getSaldo();
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
		Validacao::protegeAtributo($atributo);
		$this->$atributo = $valor;
	}

	private function formataSaldo()
	{
		return "R$ ".number_format($this->saldo,2,",",".");
	}

	public function getSaldo()
	{
		return $this->formataSaldo();
	}
}
