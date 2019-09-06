<?php

namespace Alura\Solid;

use Alura\Solid\Regra;

class Cargo {

    private $regra;

    public function __construct (Regra $regra){
        $this->regra = $regra;
    }

    public function getRegra() {
        return $this->regra;
    }

    
}