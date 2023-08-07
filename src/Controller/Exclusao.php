<?php

namespace DeboraMind\Portfolio\Controller;

use DeboraMind\Portfolio\Entity\Artigos\{Conteudo, HardSkill, Projeto, SoftSkill, Tecnologia};
use DeboraMind\Portfolio\Helper\FlashMessageTrait;
use Doctrine\ORM\EntityManagerInterface;
use Nyholm\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class Exclusao implements RequestHandlerInterface
{
    use FlashMessageTrait;

    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
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
            $this->defineMensagem('danger', 'Conteudo inexistente');
            return $resposta;
        }

        $class = 'DeboraMind\Portfolio\Entity\Artigos\\' .
            ucfirst($_GET['class']);
        $classe = new $class();
        $conteudo = $this->entityManager->getReference(
            $classe::class,
            $id
        );

        $this->entityManager->remove($conteudo);
        $this->entityManager->flush();
        $this->defineMensagem('success', 'Conteudo excluído com sucesso');

        return $resposta;
    }
}
