<?php

function parOuImpar($num) {
    if($num %2 == 0){
        return true;
    }
    return false;
}

if(parOuImpar(5)) {
    echo "Par";
} else {
    echo "Impar";
}