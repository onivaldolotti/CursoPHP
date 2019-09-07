<?php

class Conservador implements Investimento
{
    public function investe(Conta $valor) {
        return $valor->getSaldo()*0.008;
    }
}