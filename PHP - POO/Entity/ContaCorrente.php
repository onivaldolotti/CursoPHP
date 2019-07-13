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
		if (!is_numeric($valor)) {
			echo "O valor passado nao e numerico";
			exit;
		}
		$this->sacar($valor);
		$conta->depositar($valor);
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
		$this-> protegeAtributo($atributo);
		$this->$atributo = $valor;
	}

	private function protegeAtributo($atributo)
	{
		if($atributo=="titular" || $atributo == "saldo"){
			throw new Exception("Atributo privado");
		}
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
