<?php

require 'vendor/autoload.php';

use Alura\Solid\Fatura;
use Alura\Solid\GeradorNotaFiscal;
use Alura\Solid\EnviadorDeEmail;
use Alura\Solid\NotaFiscalDao;

$fatura = new Fatura;

$fatura ->setValorMensal(1000);

$gerador = new GeradorNotaFiscal();

$gerador->addAcao(new EnviadorDeEmail());
$gerador->addAcao(new NotaFiscalDao());

$gerador->gera($fatura);