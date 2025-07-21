<?php

namespace Src\System\Controller\AdminController\ClientController;
use Src\System\Controller\Controller;
use Src\System\Repository\ClientRepository;

class ControllerSeeSolicit implements Controller{

    public function __construct(private ClientRepository $clientRepository){
        
    }

    public function processaRequisicao(){
        $solicitacao = $this->clientRepository->buscaSolicitacao($_GET['id_solicit']);
        require_once __DIR__ . "/../../../../Views/AdminViewers/ClientView/solicitacao.php";
    }
}