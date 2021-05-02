<?php
namespace App\Models;

class Usuario {

    private string $nome;
    private string $senha;

    public function __construct($nome, $senha) {
        $this->nome = $nome;
        $this->senha = $senha;
    }

    

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Get the value of senha
     */ 
    public function getSenha()
    {
        return $this->senha;
    }
}