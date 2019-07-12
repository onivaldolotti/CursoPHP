<?php
ini_set('display_erros',1);
error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');

require 'ContaCorrente.php';

$contaJoao = new ContaCorrente("Joao","1212","343434-4","500.00");
$contaMaria = new ContaCorrente("Maria","1212","343435-4","1500.00");

$contaJoao -> sacar(400.90)-> depositar(100);

// echo $contaJoao->titular = "Rubao";

var_dump($contaJoao);
var_dump($contaMaria);
