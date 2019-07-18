<?php

$peso = 65;
$altura = 1.93;
$imc = $peso/($altura**2);

echo "Seu imc e $imc. Voce esta na faixa da : ";

if ($imc<18) {
	echo "Magreza.";
}else if ($imc <25) {
	echo "Normalidade";
}else {
	echo "Obesidade";
}
