<?php

class ContaComum 
{
    protected $manipulador;

    public function __construct() {
        $this->manipulador = new ManipuladorDeSaldos();
    }

    public function saca($valor) {
        //regra de negocio
        $this->manipulador->saca($valor);
    }

    public function deposita($valor) {
        $this->manipulador->deposita($valor);
    }

    public function getSaldo() {
        return $manipulador->getSaldo();
    }

    public function rende() {
        $this->manipulador->rende(1.1);
    }
}