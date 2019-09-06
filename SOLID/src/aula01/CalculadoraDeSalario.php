<?php

namespace Alura\Solid;

class CalculadoraDeSalario {

    private $regra;

    public function calcula(Funcionario $funcionario) {
       return $funcionario->getCargo()->getRegra()->calcula($funcionario);
    }
}