<?php

class Moderado implements Investimento
{
    public function investe(Conta $valor) {
        $chance = mt_rand(1,100);
        if($chance> 50) {
            return $valor->getSaldo()*0.025;
        } else {
            return $valor->getSaldo()*0.007;
        }
    }
}