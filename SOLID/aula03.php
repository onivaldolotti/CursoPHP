<?php

require_once 'vendor/autoload.php';

use Alura\Solid\Compra;
use Alura\Solid\CalculadoraDePrecos;
use Alura\Solid\TabelaDePrecoPadrao;
use Alura\Solid\Transportadora;

$compra = new Compra(3000, "Sao Paulo");

$calculadora = new CalculadoraDePrecos(new TabelaDePrecoPadrao(), new Transportadora());

echo $calculadora->calcula($compra);