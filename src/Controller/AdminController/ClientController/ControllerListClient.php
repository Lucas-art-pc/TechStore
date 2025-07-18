<?php

namespace Src\System\Controller\AdminController\ClientController;

use Src\System\Controller\Controller;
use Src\System\Repository\ClientRepository;

class ControllerListClient implements Controller{

    public function __construct(private ClientRepository $clientRepository){

    }

    public function processaRequisicao(){
        $clientes = $this->clientRepository->listaClientes();
        require __DIR__ . "/../../../../Views/AdminViewers/ClientView/list-clients-admin.php";
    }
}