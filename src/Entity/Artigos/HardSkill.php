<?php

namespace DeboraMind\Portfolio\Entity\Artigos;

use Doctrine\ORM\Mapping\{Column, Entity, GeneratedValue, Id};

#[Entity]
class HardSkill
{
    #[Id, GeneratedValue(strategy: 'AUTO'), Column]
    private int $id;
    #[Column]
    private string $nome;
    #[Column]
    private string $porcentagem;
    #[Column]
    private string $imagem;

    use PadraoConteudos;

    public function getPorcentagem(): string
    {
        return $this->porcentagem ?? '';
    }

    public function setPorcentagem(string $porcentagem): void
    {
        $this->porcentagem = $porcentagem;
    }

    public function getImagem(): string
    {
        return $this->imagem ?? '';
    }

    public function setImagem(string $imagem): void
    {
        $this->imagem = $imagem;
    }

    public function getAtributos(): array
    {
        return ['Nome', 'Porcentagem'];
    }
}
