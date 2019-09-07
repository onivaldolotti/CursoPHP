<?php

function carregaClasse($classe){
    require $classe.".php";
}

spl_autoload_register("carregaClasse");

$reforma = new Orcamento(500);

$calculadora = new CalculadoraDeImpostos();

echo $calculadora->calcula($reforma, new ICMS());

echo "<br>";

echo $calculadora->calcula($reforma, new ISS());

echo "<br>";

echo $calculadora->calcula($reforma, new KCV());

echo "<br>";

echo $calculadora->calcula($reforma, new ICCC());