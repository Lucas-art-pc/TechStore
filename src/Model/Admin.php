<?php

namespace Src\System\Model;

class Admin{
    
    private int $idAdmin;
    private string $nomeAdmin;
    private string $emailAdmin;
    private string $senhaAdmin;

    public function __construct($idAdmin, $nameAdmin, $emailAdmin, $senhaAdmin){
        $this->idAdmin = $idAdmin;
        $this->nomeAdmin = $nameAdmin;
        $this->emailAdmin = $emailAdmin;
        $this->senhaAdmin = $senhaAdmin;
    }


    public function getId(): ?int
    {
        return $this->idAdmin;
    }

    public function getNome(): string
    {
        return $this->nomeAdmin;
    }

    public function getEmail(): string
    {
        return $this->emailAdmin;
    }

    public function getSenha(): string
    {
        return $this->senhaAdmin;
    }

}