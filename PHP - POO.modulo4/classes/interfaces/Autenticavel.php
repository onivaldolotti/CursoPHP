<?php

namespace classes\interfaces;

use classes\abstratas\FuncionarioAutenticavel;

interface Autenticavel
{
	public function autentiqueAqui(FuncionarioAutenticavel $funcionario,$senha);
}
