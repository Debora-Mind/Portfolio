<?php

namespace DeboraMind\Portfolio\Controller;

use DeboraMind\Portfolio\Entity\Artigos\{Conteudo, HardSkill, Projeto, SoftSkill, Tecnologia, Formacao};
use DeboraMind\Portfolio\Helper\FlashMessageTrait;
use Doctrine\ORM\EntityManagerInterface;
use Nyholm\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class Persistencia implements RequestHandlerInterface
{
    use FlashMessageTrait;

    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $class = 'DeboraMind\Portfolio\Entity\Artigos\\' .
            ucfirst($_GET['class']);
        $classe = new $class();

        $this->set($request, $classe, 'nome');
        $this->set($request, $classe, 'descricao');
        $this->set($request, $classe, 'porcentagem');
        $this->set($request, $classe, 'link');
        $this->set($request, $classe, 'imagem');
        $this->set($request, $classe, 'instituicao');
        $this->set($request, $classe, 'inicio');
        $this->set($request, $classe, 'conclusao');

        $repositorio = $this->entityManager->getRepository($classe::class);

        $id = filter_var(
            $request->getQueryParams()['id'],
            FILTER_VALIDATE_INT
        );
        $id = $id ?? false;

        $tipo = 'success';

        if ($repositorio->find($id)) {
            $classe->setId($id);
            $this->entityManager->merge($classe);
            $this->defineMensagem($tipo, $_GET['class'] . ' atualizado com sucesso');
        } else {
            $this->entityManager->persist($classe);
            $this->defineMensagem($tipo, $_GET['class'] . ' inserido com sucesso');
        }

        $this->entityManager->flush();

        return new Response(302, ['Location' => '/listar-conteudo']);
    }

    private function sanitiza($request, $tipo)
    {
        return filter_var(
            $request->getParsedBody()[$tipo],
            FILTER_SANITIZE_SPECIAL_CHARS
        );
    }

    private function set($request, $classe, $tipo): void
    {
        if (property_exists($classe, $tipo)){
            $sanitizado = $this->sanitiza($request, $tipo);
            $setar = 'set' . ucfirst($tipo);
            $classe->$setar($sanitizado);
        }
    }
}
