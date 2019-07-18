<?php

namespace classes\funcionarios;

use classes\abstratas\Funcionario;

class Designer extends Funcionario
{

	public function getBonificacao()
	{
		return $this->salario*0.3;
	}

}
