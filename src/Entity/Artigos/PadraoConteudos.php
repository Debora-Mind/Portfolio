<?php

namespace DeboraMind\Portfolio\Entity\Artigos;

trait PadraoConteudos
{
    public function getId(): int
    {
        return $this->id ?? '';
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getNome(): string
    {
        return $this->nome ?? '';
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

}