<?php

namespace Src\System\Controller\SiteController\ClientContoller;

use Src\System\Controller\Controller;

class ControllerSendSolicit implements Controller{
    public function __construct(){

    }

    public function processaRequisicao(){
        require_once __DIR__ . "/../../../../Views/SiteViewers/solicit-client.php";
    }
}