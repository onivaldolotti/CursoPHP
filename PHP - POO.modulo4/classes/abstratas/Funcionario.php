<?php

namespace classes\abstratas;

abstract class Funcionario
{
	public $nome;
	public $cpf;
	protected $salario;

	public function __construct($cpf, $salario)
	{
		$this->cpf = $cpf;
		$this->salario = $salario;
	}

	abstract public function getBonificacao();

	public function aumentarSalario()
	{
		return $this->salario*1.5;
	}
}
