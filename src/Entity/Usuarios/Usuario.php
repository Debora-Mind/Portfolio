<?php
namespace DeboraMind\Portfolio\Entity\Usuarios;

use Doctrine\ORM\Mapping\{GeneratedValue, Id, Entity, Column};

#[Entity]
class Usuario
{

    #[Id, GeneratedValue(strategy: 'AUTO'), Column]
    private int $id;

    #[Column]
    private $email;

    #[Column]
    private $senha;

    public function senhaEstaCorreta(string $senhaPura): bool
    {
        return password_verify($senhaPura, $this->senha);
    }
}
