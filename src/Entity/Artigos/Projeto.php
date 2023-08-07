<?php

namespace DeboraMind\Portfolio\Entity\Artigos;

use Doctrine\ORM\Mapping\{Column, Entity, GeneratedValue, Id};

#[Entity]
Class Projeto
{
    #[Id, GeneratedValue(strategy: 'AUTO'), Column]
    private int $id;
    #[Column]
    private string $nome;
    #[Column]
    private string $descricao;
    #[Column]
    private string $link;
    #[Column]
    private string $imagem;

    use PadraoConteudos;

    public function getDescricao(): string
    {
        return $this->descricao ?? '';
    }

    public function setDescricao(string $descricao): void
    {
        $this->descricao = $descricao;
    }

    public function getLink(): string
    {
        return $this->link ?? '';
    }

    public function setLink(string $link): void
    {
        $this->link = $link;
    }

    public function getImagem(): string
    {
        return '/../img/octocat.png';
    }

    public function setImagem(string $imagem): void
    {
        $this->imagem = $imagem;
    }

    public function getAtributos(): array
    {
        return ['Nome', 'Descricao', 'Link'];
    }
}
