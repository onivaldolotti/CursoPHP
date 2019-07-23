<?php

namespace exception;

class SaldoInsuficienteException extends \Exception {

     private $saldo;
     private $saque;

     public function __construct($message,$saldo,$saque)
	 {
         parent::__construct($message);
         $this->saldo = $saldo;
         $this->saque = $saque;
     }

	 public function __get($param){

         return $this->$param;
     }

    public function __toString()
    {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}
