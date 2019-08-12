<?php

require __DIR__ . '/../vendor/autoload.php';

use Nyholm\Psr7\Factory\Psr17Factory;
use Nyholm\Psr7Server\ServerRequestCreator;
use Psr\Http\Server\RequestHandlerInterface;

$caminho = $_SERVER['PATH_INFO'];
$rotas = require __DIR__ . '/../config/routes.php';

if (!array_key_exists($caminho, $rotas)) {
    http_response_code(404);
    exit();
}

session_start();

$ehRotaDeLogin = stripos($caminho, 'login');
if (!isset($_SESSION['logado']) && $ehRotaDeLogin === false) {
    header('Location: /login');
    exit();
}

$psr17Factory = new Psr17Factory();// fabrica de mensagens HTTP

$creator = new ServerRequestCreator( // forma de criar requisicoes, utilizando a fabrica
    $psr17Factory, // ServerRequestFactory
    $psr17Factory, // UriFactory
    $psr17Factory, // UploadedFileFactory
    $psr17Factory  // StreamFactory
);

$request = $creator->fromGlobals();// utiliza as superglobais do php($_POST, $_GET,...) pra criar uma requisicao

$classeControladora = $rotas[$caminho];

$container = require __DIR__.'/../config/dependencies.php'; //diretorio do injetor de dependencies

$controlador = $container->get($classeControladora); //instanciando a classe atraves do injetor

$resposta = $controlador->handle($request); //passamos a request para o nosso metodo

foreach ($resposta->getHeaders() as $name=>$values) { //pegando todos os cabecalhos da requisicao
    foreach ($values as $value) {
        header(sprintf('%s: %s', $name, $value), false);
    }
}

echo $resposta->getBody();
