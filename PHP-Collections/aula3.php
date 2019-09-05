<?php

require 'TocadorDeMusica.php';

$musicas = new SplFixedArray(4);

$musicas[0]= "Toxicity";
$musicas[1]= "Hunger Strike";
$musicas[2]= "Sludge Factory";
$musicas[3]= "Man in the Box";

$tocador = new TocadorDeMusica();

$tocador-> adicionarMusicas($musicas);

$tocador->baixarMusicas();
