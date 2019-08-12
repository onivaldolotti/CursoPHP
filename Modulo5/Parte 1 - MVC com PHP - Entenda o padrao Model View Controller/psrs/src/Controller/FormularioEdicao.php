<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Doctrine\ORM\EntityManagerInterface;
use Nyholm\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class FormularioEdicao extends ControllerComHtml implements RequestHandlerInterface
{
    use FlashMessageTrait;

    private $repositorioCursos;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->repositorioCursos = $entityManager
            ->getRepository(Curso::class);
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {

        $id = filter_var(
            $request->getQueryParams(),
            FILTER_VALIDATE_INT
        );

        $resposta = new Response (302, ['Location:'=>'/listar-cursos']);
        if (is_null($id) || $id === false) {
            return $resposta;
        }
        
        $curso = $this->repositorioCursos->find($id);

        $html= $this->renderizaHtml('cursos/formulario.php', [
            'curso' => $curso,
            'titulo' => 'Alterar curso ' . $curso->getDescricao(),
        ]);
        return new Response(200,[], $html);
    }
}
