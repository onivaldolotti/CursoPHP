<?php

require 'vendor/autoload.php';

use Alura\Solid\Funcionario;
use Alura\Solid\Desenvolvedor;
use Alura\Solid\CalculadoraDeSalario;
use Alura\Solid\DezOuVintePorcento;

$dev = new Funcionario( new Desenvolvedor(new DezOuVintePorcento()), 3100);

$calculadora = new CalculadoraDeSalario();

echo $calculadora->calcula($dev);