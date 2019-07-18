<?php

// require_once 'Calculadora.php';
//
// $notas = [9, 3, 10, 5, 10];
//
// $calculadora = new Calculadora();
// $media = $calculadora->calculaMedia($notas);
//
// if($media) {
// 	echo "A média é: $media";
// } else {
// 	echo "Nao foi possivel calcular a media";
// }
//--------------------------------------------------//--------------------------------------------
$saldos = [ 2500, 3000, 4440, 1000];

foreach ($saldos as $saldo) {
	echo "<p>O saldo e: $saldo</p>";
}
// echo "<pre>";
// var_dump($saldos);
sort($saldos);
// var_dump($saldos);
// echo "</pre>";
echo "O menor saldo e: $saldos[0]";

$nomes = "Giovani, Raul, Paulo";

$array_nomes = explode (", ", $nomes);

foreach ($array_nomes as $nome) {
	echo "<p>Ola $nome</p>";
}
$nomesJuntos = implode(", ", $array_nomes);

echo $nomesJuntos;
