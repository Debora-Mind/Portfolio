<?php

namespace DeboraMind\Portfolio\Controller;

use DeboraMind\Portfolio\Entity\Artigos\{HardSkill, Projeto, SoftSkill, Tecnologia, Formacao};
use DeboraMind\Portfolio\Helper\RenderizadorDeHtmlTrait;
use Doctrine\ORM\EntityManagerInterface;
use Nyholm\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class ListarConteudo implements RequestHandlerInterface
{
    use RenderizadorDeHtmlTrait;

    private $repositorioDeHardSkill;
    private $repositorioDeProjetos;
    private $repositorioDeSoftSkill;
    private $repositorioDeTecnologias;
    private $repositorioDeFormacoes;
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
        $this->repositorioDeHardSkill = $entityManager
            ->getRepository(HardSkill::class);
        $this->repositorioDeProjetos = $entityManager
            ->getRepository(Projeto::class);
        $this->repositorioDeSoftSkill = $entityManager
            ->getRepository(SoftSkill::class);
        $this->repositorioDeTecnologias = $entityManager
            ->getRepository(Tecnologia::class);
        $this->repositorioDeFormacoes = $entityManager
            ->getRepository(Formacao::class);
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $html = $this->renderizaHtml('Artigos/listar-conteudo.php',
            dados: [
                'hard_skills' => $this->repositorioDeHardSkill->findAll(),
                'projetos' => $this->repositorioDeProjetos->findAll(),
                'soft_skills' => $this->repositorioDeSoftSkill->findAll(),
                'tecnologias' => $this->repositorioDeTecnologias->findAll(),
                'formacoes' => $this->repositorioDeFormacoes->findAll(),
                'entity' => $this->entityManager,
                'titulo' => 'Lista de conteúdos',
            ]);

        return new Response(200, [], $html);
    }
}
