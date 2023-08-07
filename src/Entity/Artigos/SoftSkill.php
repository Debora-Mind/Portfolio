<?php

namespace DeboraMind\Portfolio\Entity\Artigos;

use Doctrine\ORM\Mapping\{Column, Entity, GeneratedValue, Id};

#[Entity]
class SoftSkill
{
    #[Id, GeneratedValue(strategy: 'AUTO'), Column]
    private int $id;
    #[Column]
    private string $nome;
    #[Column]
    private string $descricao;

    use PadraoConteudos;

    public function getDescricao(): string
    {
        return $this->descricao ?? '';
    }

    public function setDescricao(string $descricao): void
    {
        $this->descricao = $descricao;
    }

    public function getAtributos(): array
    {
        return ['Nome', 'Descricao'];
    }
}
