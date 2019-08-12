<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Usuario;
use Doctrine\ORM\EntityManagerInterface;
use Nyholm\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class RealizarLogin implements RequestHandlerInterface
{
    use FlashMessageTrait;

    private $repositorioDeUsuarios;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->repositorioDeUsuarios = $entityManager
            ->getRepository(Usuario::class);
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {

        $email = filter_input($request->getParsedBody()['email'], FILTER_VALIDATE_EMAIL);

        $resposta = new Response(302, ['Location'=>'/login']);
        if (is_null($email) || $email === false) {
            $this->defineMensagem('danger', 'O e-mail digitado não é um e-mail válido');
            return $resposta;

        }

        $senha = filter_input($request->getParsedBody()['senha'], FILTER_SANITIZE_STRING);

        $usuario = $this->repositorioDeUsuarios
            ->findOneBy(['email' => $email]);

        if (is_null($usuario) || !$usuario->senhaEstaCorreta($senha)) {
            $this->defineMensagem('danger', 'E-mail ou senha invalidos');
            return $resposta;
        }

        $_SESSION['logado'] = true;

        return new Response (200,['Location'=>'/listar-cursos']);
    }
}
