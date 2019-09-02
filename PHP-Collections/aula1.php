<?php

require 'TocadorDeMusica.php';

$musicas = new SplFixedArray(2);

$musicas[0]= "Toxicity";
$musicas[1]= "Hunger Strike";

$musicas-> setSize(4);

$musicas[2]= "Sludge Factory";
$musicas[3]= "Man in the Box";

$tocador = new TocadorDeMusica();

$tocador->adicionarMusicas($musicas);

$tocador->adicionarMusicaNoComeco("Pontes Indestrutives");

$tocador->removerMusicadoComeco();

$tocador->removerMusicaDoFinal();

$tocador->tocarTodas();


