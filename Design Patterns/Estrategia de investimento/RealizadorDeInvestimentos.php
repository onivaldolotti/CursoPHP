<?php

class RealizadorDeInvestimentos
{
    public function investe(Conta $valor, Investimento $investimento) {
        $resultado= $investimento->investe($valor);

        $valor->deposita($resultado*0.75);
        return $valor->getSaldo();
    }
}