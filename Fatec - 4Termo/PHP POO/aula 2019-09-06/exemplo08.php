<?php

function maior($a, $b) {
    if($a > $b) {
        return $a;
    }
    return $b;
}

$n1 =2;
$n2 = 6;
$n3 = 4;

$media = ($n1+$n2)/2;
if ($media>=6) {
    echo "Aprovado com Media = $media";
} else {
    $media = (maior($n1, $n2)+$n3)/2;
    if ($media>=6) {
        echo "Aprovado com Media = $media";
    } else {
        echo "Reprovado com Media = $media";
    }
}