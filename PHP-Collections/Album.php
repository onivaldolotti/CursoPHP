<?php

Class Album {

    private $nome;

    public function __construct(String $nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }
}