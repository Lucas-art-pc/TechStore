<?php

namespace Src\System\Controller\AdminController\ClientController;
use Src\System\Controller\Controller;
use Src\System\Repository\ClientRepository;

class ControllerDeleteClient implements Controller{

    public function __construct(private ClientRepository $clientRepository){

    }

    public function processaRequisicao(){
        
        $id = filter_input(INPUT_GET, 'id_client', FILTER_VALIDATE_INT);
        $this->clientRepository->deletaCliente($id);
        header('Location: list-client');
    }
}