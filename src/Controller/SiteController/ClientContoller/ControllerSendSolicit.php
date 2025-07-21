<?php

namespace Src\System\Controller\SiteController\ClientContoller;

use Src\System\Controller\Controller;
use Src\System\Repository\ClientRepository;

class ControllerSendSolicit implements Controller{
    public function __construct(private ClientRepository $clientRepository){

    }

    public function processaRequisicao(){
        
        require_once __DIR__ . "/../../../../Views/SiteViewers/solicit-client.php";
    }
}