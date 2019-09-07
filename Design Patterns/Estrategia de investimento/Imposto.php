<?php

class Imposto
{
    public function calcula(Conta $valor) {
        return $valor->getSaldo()*0.75;
    }
}