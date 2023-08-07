<?php

namespace DeboraMind\Portfolio\Controller;

use DeboraMind\Portfolio\Entity\Artigos\{Conteudo, HardSkill, Projeto, SoftSkill, Tecnologia};
use DeboraMind\Portfolio\Helper\FlashMessageTrait;
use DeboraMind\Portfolio\Helper\RenderizadorDeHtmlTrait;
use DeboraMind\Portfolio\Infra\EntityManagerCreator;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Nyholm\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class FormularioEdicao implements RequestHandlerInterface
{
    use RenderizadorDeHtmlTrait, FlashMessageTrait;

    private EntityRepository $repositorio;
    private mixed $classe;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $class = 'DeboraMind\Portfolio\Entity\Artigos\\' .
            ucfirst($_GET['class']);
        $this->classe = new $class();
        $this->repositorio = $entityManager
            ->getRepository($this->classe::class);
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $id = filter_var(
            $request->getQueryParams()['id'],
            FILTER_VALIDATE_INT
        );
        $id = $id ?? false;

        $resposta = new Response(302, ['Location' => '/listar-conteudo']);
        if (is_null($id) || $id === false) {
            $this->defineMensagem('danger', 'ID de conteudo inválido');
            return $resposta;
        }

        $classe = $this->repositorio->find($id);

        $html = $this->renderizaHtml('Artigos/adicionar.php', [
            'classe' => $classe,
            'titulo' => 'Alterar curso ' . ucfirst($_GET['class']),
            'classeBase' => $classe::class,
        ]);

        return new Response(200, [], $html);
    }
}
