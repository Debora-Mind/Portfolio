<?php

namespace DeboraMind\Portfolio\Controller;

use DeboraMind\Portfolio\Entity\Artigos\{Conteudo, HardSkill, Projeto, SoftSkill, Tecnologia, Formacao};
use DeboraMind\Portfolio\Helper\RenderizadorDeHtmlTrait;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Nyholm\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class FormularioInsercao implements RequestHandlerInterface
{
    use RenderizadorDeHtmlTrait;

    private mixed $classe;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $class = 'DeboraMind\Portfolio\Entity\Artigos\\' .
            ucfirst($_GET['class']);
        $this->classe = new $class();
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $html = $this->renderizaHtml('Artigos/adicionar.php', [
            'titulo' => 'Novo ' . $_GET['class'],
            'classeBase' => $this->classe,
        ]);

        return new Response(200, [], $html);
    }
}
