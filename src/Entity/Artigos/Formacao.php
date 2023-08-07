<?php

namespace DeboraMind\Portfolio\Entity\Artigos;

use Doctrine\ORM\Mapping\{Column, Entity, GeneratedValue, Id};
use DateTime;

#[Entity]
Class Formacao
{
    #[Id, GeneratedValue(strategy: 'AUTO'), Column]
    private int $id;
    #[Column]
    private string $nome;
    #[Column]
    private string $instituicao;
    #[Column]
    private string $imagem;
    #[Column]
    private \DateTime $inicio;
    #[Column(nullable: 'true')]
    private ? \DateTime $conclusao;

    use PadraoConteudos;

    public function getInstituicao(): string
    {
        return $this->instituicao ?? '';
    }

    public function setInstituicao(string $instituicao): void
    {
        $this->instituicao = $instituicao;
    }

    public function getImagem(): string
    {
        if ($this->imagem == '') {
            return '/../img/octocat.png';
        }
        if (strlen($this->imagem) <= 20) {
            return '/../img/' . $this->imagem;
        }
        return $this->imagem;
    }

    public function setImagem(string $imagem): void
    {
        $this->imagem = $imagem;
    }

    public function getInicio($formato): string
    {
        if ($formato == 'mes/ano') {
            return $this->inicio->format('m/Y') ?? '';
        }

        return $this->inicio->format('Y-m') ?? '';
    }

    public function setInicio(string $inicio): void
    {
        $this->inicio = new DateTime($inicio);
    }

    public function getConclusao($formato): string
    {
        if ($formato == 'mes/ano') {
            return $this->conclusao->format('m/Y') ?? '';
        }

        return $this->conclusao->format('Y-m') ?? '';
    }

    public function setConclusao(string $conclusao): void
    {
        $this->conclusao = new DateTime($conclusao);

    }

    public function getAtributos(): array
    {
        return ['Nome', 'Instituicao'];
    }
}
