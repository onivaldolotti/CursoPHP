<?php

$nome = $_POST['nome'];
$pedacos = explode(' ',strtoupper($nome));
$tamanhoVetor = count($pedacos);

$lastName = $pedacos[$tamanhoVetor-1].', ';

for($i= 0; $i< $tamanhoVetor-1; $i++) {
    if($pedacos[$i] == "DOS" || $pedacos[$i] == "DAS" || $pedacos[$i] == "DO" || $pedacos[$i] == "DA") {
        $lastName.='';
    } else {
        $lastName.= " ".$pedacos[$i]{0}.".";
    }
}
echo $lastName;

