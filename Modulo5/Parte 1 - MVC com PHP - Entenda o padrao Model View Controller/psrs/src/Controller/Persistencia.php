<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Doctrine\ORM\EntityManagerInterface;
use Nyholm\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class Persistencia implements RequestHandlerInterface
{
    use FlashMessageTrait;

    private $entityManager;

	public function __construct(EntityManagerInterface $entityManager)// vai ser adicionado via injetor de dependencias
	{
		$this->entityManager= $entityManager; // nao é resposabilidade do controller criar o entityManager, por isso ao inves de instarciar a classe nos pedimos ela por injecao  de dependencia
	}

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $descricao = filter_var( $request->getParsedBody()['descricao'], FILTER_SANITIZE_STRING);

        $curso = new Curso();
        $curso->setDescricao($descricao);


        $id = filter_var($request->getQueryParams()['id'], FILTER_VALIDATE_INT);

        if (!is_null($id) && $id !== false) {
            $curso->setId($id);
            $this->entityManager->merge($curso);
            $this->defineMensagem('sucess', 'Curso atualizado com sucesso');
        } else {
            $this->entityManager->persist($curso);
            $this->defineMensagem('sucess', 'Curso inserido com sucesso');
        }
//        $_SESSION['tipo_mensagem'] = 'success';
        $this->defineMensagem('sucess', '');

        $this->entityManager->flush();

        return new Response (302, ['Location'=>'/listar-cursos']);
    }
}
