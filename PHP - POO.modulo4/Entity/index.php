<?php

require_once "autoload.php";

use classes\funcionarios\Diretor;
use classes\funcionarios\Designer;
use classes\Diretor as Teste;

$diretor = new Diretor();
$diretor2 = new Teste();
$designer = new Designer();

var_dump($diretor);
var_dump($designer);
var_dump($diretor2);
