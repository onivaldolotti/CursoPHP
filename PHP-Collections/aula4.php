<?php

require 'Ranking.php';
require 'TocadorDeMusica.php';
require 'Musica.php';

$musicas = new SplFixedArray(4);
$musicas[0] = new Musica("One Dance");
$musicas[1] = new Musica("Toxicity");
$musicas[2] = new Musica("Camisa 10");
$musicas[3] = new Musica("Loser");

$tocador = new TocadorDeMusica();

$tocador->adicionarMusicas($musicas);

$tocador->tocarMusica();
$tocador->tocarMusica();
$tocador->tocarMusica();
$tocador->tocarMusica();

$tocador->avancarMusica();

$tocador->tocarMusica();
$tocador->tocarMusica();
$tocador->tocarMusica();

$tocador->avancarMusica();

$tocador->tocarMusica();
$tocador->tocarMusica();

$tocador->avancarMusica();

$tocador->tocarMusica();
$tocador->tocarMusica();
$tocador->tocarMusica();

$tocador->exibeRanking();