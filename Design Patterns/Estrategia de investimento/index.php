<?php

function carregaClasse($classe){
    require $classe.".php";
}

spl_autoload_register("carregaClasse");

$saldo = new Conta();

$saldo->deposita(500);

$investe = new RealizadorDeInvestimentos();

echo $investe->investe($saldo, new Conservador());
