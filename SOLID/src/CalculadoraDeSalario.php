<?php

namespace Alura\Solid;

class CalculadoraDeSalario {

    private $regra;

public function calcula(Funcionario $funcionario) {

    if($funcionario->getCargo() instanceof Desenvolvedor) {
        $regra = new DezOuVintePorcento();
        return $regra->calcula($funcionario);
    }
    else if($funcionario->getCargo() instanceof Tester || $funcionario->getCargo() instanceof Dba) {
        $regra = new QuinzeOuVinteCincoPorcento();
        return $regra->calcula($funcionario);
    }

}





}