<?php 

namespace DeboraMind\Portfolio\service;
require_once __DIR__ . '../../../vendor/autoload.php';

class artigosFactory
{
    public function __construct(
        private int $id,
        private string $titulo, 
        private string $conteudo, 
        private ? string $tipo
    ){   
    }    
}