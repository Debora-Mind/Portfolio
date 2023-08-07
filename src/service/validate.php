<?php

namespace DeboraMind\Portfolio\service;

class validate
{
    private bool $login;
    
    public function __construct(
            public readonly string $user,
            public readonly string $password
    ) {
        $this->login();
        $this->header();
    }
    private function login(): void
    {
        $listUsers = ['user' => 'password'];
         foreach ($listUsers as $cadastredUser) {
             if ($this->user == key($listUsers)) {
                 if ($this->password == $cadastredUser) {
                     $this->login = true;
                     return;
                 } 
             }
         }
         $this->login = false;
    }
    
    private function header() {
        if ($this->login == false) {
            header('Location: '. 'admin.php');
}
    }
}
