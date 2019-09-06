<?php

namespace Alura\Solid;

class NotaFiscalDao implements AcaoAposGerarNota {
    public function executa(NotaFiscal $nf) {
       echo "mandando pro dao";
    }
}