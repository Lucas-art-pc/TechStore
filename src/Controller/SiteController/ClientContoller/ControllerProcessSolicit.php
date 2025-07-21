<?php

namespace Src\System\Controller\SiteController\ClientContoller;

use Src\System\Controller\Controller;
use Src\System\Repository\ClientRepository;

class ControllerProcessSolicit implements Controller{

     public function __construct(private ClientRepository $clientRepository){

     }

     public function processaRequisicao(){
          if(isset($_POST['send'])){
            $data = $this->clientRepository->retornaObjeto($_POST);
            $this->clientRepository->enviarSolicitacao($data);
            header('Location: /');
        }
     }

    
}