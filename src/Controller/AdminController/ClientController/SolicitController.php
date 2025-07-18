<?php
namespace Src\System\Controller\AdminController\ClientController;
use Src\System\Controller\Controller;
use Src\System\Repository\ClientRepository;

class SolicitController implements Controller{

    public function __construct(private ClientRepository $clientRepository){

    }

    public function processaRequisicao(){
        $solicitacoes = $this->clientRepository->listaSolicitacoes();
        require_once __DIR__ . "/../../../../Views/AdminViewers/ClientView/solicitacoes.php";
    }

}