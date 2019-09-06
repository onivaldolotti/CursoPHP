<?php

namespace Alura\Solid;

use Alura\Solid\Regra;

class QuinzeOuVinteCincoPorcento implements Regra{

    public function calcula(Funcionario $funcionario) {

        if($funcionario->getSalario() > 2000) {
            return $funcionario->getSalario() * 0.75;
        }
    
        return $funcionario->getSalario() * 0.85;
    
    }
}