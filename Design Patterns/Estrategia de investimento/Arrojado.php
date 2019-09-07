<?php

class Arrojado implements Investimento
{
    public function investe(Conta $valor) {
        $chance = mt_rand(1,100);
        if ($chance>80) {
            return $valor->getSaldo()*0.05;
        } elseif ($chance>50 && $chance<=80) {
            return $valor->getSaldo()*0.03;
        } else {
            return $valor->getSaldo()*0.006;
        }
    }
}