<?php

namespace Alura\Cursos\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Nyholm\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class FormularioInsercao extends ControllerComHtml implements RequestHandlerInterface // interface pradao pega na psr, pelo packagist
{
	public function handle(ServerRequestInterface $request): ResponseInterface // metodo padrao para request http
	{
		$html= $this->renderizaHtml('cursos/formulario.php', [
            'titulo' => 'Novo curso'
        ]);

		return new Response(200, [	], $html); //resposta padrao
	}
}
