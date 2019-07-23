<?php
ini_set('display_erros',1);
error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');

include 'autoload.php';

$contaJoao = new ContaCorrente("Joao","1212","343434-4","500.00");
$contaMaria = new ContaCorrente("Maria","1212","343435-4","1500.00");
$contaJoana = new ContaCorrente("Joana","1212","343423-9",100.00);
$contaJosefa = new ContaCorrente("josefa","1212","343423-9",100.00);
$contaJosenilda = new ContaCorrente("Josenilda","1212","343423-9",100.00);
$contaFernanda = new ContaCorrente("Fernanda","1212","3434234-9",100.00);
$contaBernardo = new ContaCorrente("Bernardo","1212","3434235-9",100.00);

echo "<br>";
echo ContaCorrente::$totalDeContas;
echo "<br>";
echo ContaCorrente::$taxaOperacao;

echo "<br>";
// try {
// 	$contaJoao->transferir(0,$contaMaria);
// }catch(\InvalidArgumentException $e) {
//     echo "Capturando erro 1";
//     echo $e->getMessage();
// }catch(\Exception $e) {
//     echo "Capturando erro 2";
//     echo $e->getMessage();
// }
echo "<br>";
try{

    $contaJoao->sacar(50000);

}catch(\exceptions\SaldoInsuficienteException $e){
    echo $e->getMessage()." Saldo disponível:".$e->saldo." Valor do saque: ".$e->saque;
    var_dump($e);

}
echo "<pre>";
var_dump($contaJoao);
var_dump($contaMaria);
echo "</pre>";
