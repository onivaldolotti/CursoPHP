<?php declare(strict_types=1);

namespace Alura;

require 'autoloader.php';

// $correntistas_e_compras = ["Giovani", "Joao", 12, "Maria", 25, "Luis", "12"];
//
// echo "<pre>";
// var_dump($correntistas_e_compras);
// ArrayUtils::remover("Giovani", $correntistas_e_compras);
// var_dump($correntistas_e_compras);
// echo "</pre>";

$correntistas= [
  "Giovanni",
  "João",
  "Maria",
  "Luis",
  "Luisa",
  "Rafael"
];

$saldos = [
   2500,
   3000,
   4400,
   1000,
   8700,
   9000
];

$relacionados = array_combine ($correntistas, $saldos);

if (array_key_exists("João", $relacionados)) {
    echo "O saldo do João é: {$relacionados["João"]}";
 } else {
    echo "Não foi encontrado";
}
echo "<p>O saldo do Giovanni é: {$relacionados["Giovanni"]}</p>";

$maiores = ArrayUtils::encontrarPessoasComSaldoMaior(3000,  $relacionados);

echo "<pre>";
var_dump($maiores);
echo "</pre>";
