<?php

namespace Src\System\Model;
class Client{

    private ?int $idClient;
    private string $nomeClient;
    private string $emailClient;
    private string $cpfClient;
    private string $descricaoClient;
    private string $enderecoClient;
    private string $senhaClient;

    public function __construct($idClient, $nomeClient, $emailClient, $cpfClient, $descricaoClient, $enderecoClient, $senhaClient){
        $this->idClient = $idClient;
        $this->nomeClient = $nomeClient;
        $this->emailClient = $emailClient;
        $this->cpfClient = $cpfClient;
        $this->descricaoClient = $descricaoClient;
        $this->enderecoClient = $enderecoClient;
        $this->senhaClient = $senhaClient;
    }

    public function getIdCli(){
        return $this->idClient;
    }

    public function getNomeCli(){
        return $this->nomeClient;
    }
    public function getEmailCli(){
        return $this->emailClient;
    }

    public function getCpfCli(){
        return $this->cpfClient;
    }

    public function getDescricaoCli(){
        return $this->descricaoClient;
    }

    public function getEnderecoCli(){
        return $this->enderecoClient;
    }

    public function getSenhaCli(){
        return $this->senhaClient;
    }




}