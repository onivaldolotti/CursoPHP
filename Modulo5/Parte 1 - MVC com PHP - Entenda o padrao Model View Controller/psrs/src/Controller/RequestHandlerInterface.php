<?php

namespace Alura\Cursos\Controller;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

interface RequestHandlerInterface
{
    public function handle(ServerRequestInterface $request): ResponseInterface;
}
// exemplo dado com get: $_GET = $request->getQueryParams();
//exemplo dado com post: $_POST = $request->getParsedBody();
