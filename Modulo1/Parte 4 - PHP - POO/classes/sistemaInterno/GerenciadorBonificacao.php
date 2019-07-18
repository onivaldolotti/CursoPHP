<?php

namespace classes\sistemaInterno;

use classes\abstratas\Funcionario;
use classes\interfaces\Autenticavel;
use classes\abstratas\FuncionarioAutenticavel;

class GerenciadorBonificacao implements Autenticavel
{
	private $totalBonificacoes;
	private $autenticado;

	public function registrar(Funcionario $funcionario)
	{
		if($this->autenticado) {
			$this->totalBonificacoes += $funcionario->getBonificacao();
		}else{
			throw new \Exception("Voce nao esta logado");

		}

	}

	public function getTotalBonificacao()
	{
			return $this->totalBonificacoes;
	}

	public function autentiqueAqui(FuncionarioAutenticavel $funcionario, $senha)
	{
		$this->autenticado = $funcionario->autenticar($senha);
	}
}
