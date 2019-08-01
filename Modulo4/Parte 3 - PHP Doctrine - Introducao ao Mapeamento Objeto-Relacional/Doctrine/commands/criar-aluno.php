<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$aluno = new Aluno();
$aluno->setNome($argv[1]);//apos o flush ira ficar com o nome Vinicius Dias

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$entityManager->persist($aluno);
$aluno->setNome('Vinicius Dias');//sempre vai mapear a entidade, mesmo ja tendo chamado o metodo persist

$entityManager->flush();
