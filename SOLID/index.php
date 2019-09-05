<?php

require 'vendor/autoload.php';

use Alura\Solid\Funcionario;
use Alura\Solid\Desenvolvedor;
use Alura\Solid\CalculadoraDeSalario;

$dev = new Funcionario();

$dev->setSalario(3100);

$dev->setCargo(new Desenvolvedor());
$calculadora = new CalculadoraDeSalario();

echo $calculadora->calcula($dev);