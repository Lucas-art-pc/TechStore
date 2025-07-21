<?php

namespace Src\System\Repository;

use Src\System\Model\Client;
use PDO;

class ClientRepository{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    public function enviarSolicitacao(Client $client){
        $sqlInsert = "INSERT INTO clientes (tipo_cli, nome_cli, email_cli, cpf_cli, descricao_cli, endereco_cli, senha_cli)
                    VALUES (FALSE, :nome_cli, :email_cli, :cpf_cli, :descricao_cli, :endereco_cli, :senha_cli)";
        $steament = $this->pdo->prepare($sqlInsert);
        $steament->bindValue(':nome_cli',$client->getNomeCli());
        $steament->bindValue(':email_cli',$client->getEmailCli());
        $steament->bindValue(':cpf_cli',$client->getCpfCli());
        $steament->bindValue(':descricao_cli',$client->getDescricaoCli());
        $steament->bindValue(':endereco_cli',$client->getEnderecoCli());
        $steament->bindValue(':senha_cli',$client->getSenhaCli());
        $steament->execute();
    }

    public function listaClientes(){
        $sqlSelect = "SELECT * FROM clientes WHERE tipo_cli = true";
        $statement = $this->pdo->query($sqlSelect);
        $client = $statement->fetchAll(PDO::FETCH_ASSOC);
        $allClients = array_map( function($client){
            return new Client(
                $client['id_cli'],
                $client['nome_cli'],
                $client['email_cli'],
                $client['cpf_cli'],
                $client['descricao_cli'],
                $client['endereco_cli'],
                $client['senha_cli']
            );
        },$client);

        return $allClients;
    }

    public function listaSolicitacoes(){
        $sqlSelect = "SELECT * FROM clientes WHERE tipo_cli = false";
        $statement = $this->pdo->query($sqlSelect);
        $client = $statement->fetchAll(PDO::FETCH_ASSOC);
        $allClients = array_map( function($client){
            return new Client(
                $client['id_cli'],
                $client['nome_cli'],
                $client['email_cli'],
                $client['cpf_cli'],
                $client['descricao_cli'],
                $client['endereco_cli'],
                $client['senha_cli']
            );
        },$client);

        return $allClients;
    }

    public function retornaObjeto($client){
        return new Client(
                $client['id_cli'],
                $client['nome_cli'],
                $client['email_cli'],
                $client['cpf_cli'],
                $client['descricao_cli'],
                $client['endereco_cli'],
                $client['senha_cli']
            );
    }

    public function buscaSolicitacao(INT $idCli){
        $sqlSelect = "SELECT * FROM clientes WHERE id_cli = :id_cli";
        $statement = $this->pdo->prepare($sqlSelect);
        $statement->bindValue(':id_cli', $idCli);
        $statement->execute();
        $data = $statement->fetch(PDO::FETCH_ASSOC);

        return $this->retornaObjeto($data);
    }

    public function deletaCliente(int $id){
        $sqlDelete = "DELETE FROM clientes WHERE id_cli = :id_cli";
        $statement = $this->pdo->prepare($sqlDelete);
        $statement->bindValue(':id_cli', $id, PDO::PARAM_INT);
        $statement->execute();
    }
    }
