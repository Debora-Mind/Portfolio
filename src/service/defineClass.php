<?php

namespace DeboraMind\Portfolio\service;

use DeboraMind\Portfolio\Entity\Artigos\{
    Artigo,
    Fixed,
    HardSkill,
    Projeto,
    SoftSkill,
    Tecnologia};

class defineClass
{
    public function __construct(
        private $class
    )
    {
    }

    public function classInsert(
                        string $arg1, 
                        string $arg2, 
                        ? string $arg3
    ){
        $this->class->setName($arg1);
        $this->class->setContent($arg2);
        $this->class->setPorcent($arg3);
    }
}
