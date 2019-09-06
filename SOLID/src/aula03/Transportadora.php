<?php

namespace Alura\Solid;

class Transportadora implements ServicoDeEntrega {

    public function para($cidade) {

        if(strtolower($cidade) == "SAO PAULO") {
            return 5;
        }

        return 10;
    }
}