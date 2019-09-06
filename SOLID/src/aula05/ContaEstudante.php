<?php

class ContaEstudante 
{
    private $milhas;
    private $manipulador;

    public function __construct() {
        $this->manipulador = new ManipuladorDeSaldos();
    }

    public function deposita($valor) 
    {
        $this->manipulador->deposita($valor);
        $this->milhas += $valor;
    }

    public function getMilhas() 
    {
        return $this->milhas;
    }
    
}