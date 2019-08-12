<?php

namespace Alura\Cursos\Controller;

use Nyholm\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class FormularioLogin extends ControllerComHtml implements RequestHandlerInterface
{
    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $html= $this->renderizaHtml('login/formulario.php', [
            'titulo' => 'Login'
        ]);

        return new Response(302, [], $html);
    }
}
