<?php

require_once "autoload.php";

use classes\funcionarios\Diretor;
use classes\funcionarios\Designer;
use classes\sistemaInterno\GerenciadorBonificacao;
//use classes\Diretor as Teste;

$diretor = new Diretor("222.333.444-55", 20000.00);
//$diretor2 = new Teste();
$designer = new Designer("333.444.555-66", 1000.00);
$gerenciador = new GerenciadorBonificacao();

$diretor->senha = "123456";

$gerenciador->autentiqueAqui($diretor, "123456");
$gerenciador-> registrar($diretor);

var_dump($gerenciador->getTotalBonificacao());

echo $designer->getBonificacao();
echo $diretor->getBonificacao();

echo $designer->aumentarSalario();
echo $diretor->aumentarSalario();


var_dump($diretor->autenticar("teste"));

var_dump($diretor);
var_dump($designer);
// var_dump($diretor2);
