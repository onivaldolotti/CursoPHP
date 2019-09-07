<?php
$lista = array(12,6,9,15,20);

print_r($lista);

array_push($lista, 35);
echo "Push insere no Final".PHP_EOL;
print_r($lista);

array_pop($lista);
echo "Pop remove do Final".PHP_EOL;
print_r($lista);

array_shift($lista);
echo "shift remove do inicio".PHP_EOL;
print_r($lista);

array_unshift($lista, 35);
echo "unshift insere no inicio".PHP_EOL;
print_r($lista);

$lista= array_reverse($lista, true);
echo "Inverte o array e com o true mantem as posicoes".PHP_EOL;
print_r($lista);

$lista= array_reverse($lista, false);
echo "Inverte o array e com o true altera as posicoes".PHP_EOL;
print_r($lista);

$lista= array_slice($lista, 3);
echo "Extrai uma porcao de um array".PHP_EOL;
print_r($lista);

$count= count($lista);
echo "Retorna o tamanho do vetor".PHP_EOL;
echo $count.PHP_EOL;

sort($lista);
echo "sort ordena o vetor".PHP_EOL;
print_r($lista);

if(in_array(4,$lista)) {
	echo "Contem o numero".PHP_EOL;
}else {
	echo "Nao contem".PHP_EOL;
}
