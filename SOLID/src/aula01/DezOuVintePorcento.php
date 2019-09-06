<?php

namespace Alura\Solid;

use Alura\Solid\Regra;

class DezOuVintePorcento implements Regra{

   public function calcula(Funcionario $funcionario) {

        if($funcionario->getSalario() > 3000) {
            return $funcionario->getSalario() * 0.8;
        }
    
        return $funcionario->getSalario() * 0.9;
    }
}