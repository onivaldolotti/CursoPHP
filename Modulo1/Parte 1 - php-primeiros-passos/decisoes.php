<?php

$idade = 17;
$nome = 'Vinicius';
$numeroDePessoas = 1;

echo "Voce so pode entrar se tiver mais do que 18 anos ou a partir de 16 anos acompanhado". PHP_EOL;

if ($idade>=18 ){
	echo "Voce tem $idade anos.".PHP_EOL;
	echo "Pode Entrar";
}else if($idade >= 16 && $numeroDePessoas>1){
	echo "Voce tem $idade anos, esta acompanhado(a), entao pode entrar";
}else {
	echo "Voce so tem $idade anos.".PHP_EOL;
	echo "Voce nao pode entrar";
}

echo PHP_EOL;
echo "Adeus!";
