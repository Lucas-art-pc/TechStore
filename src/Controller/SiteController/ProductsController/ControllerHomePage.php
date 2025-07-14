<?php

namespace Src\System\Controller\SiteController\ProductsController;
use Src\System\Controller\Controller;

class ControllerHomePage implements Controller{

    public function __construct(){

    }

    public function processaRequisicao(){
        require_once __DIR__ . "/../../../../Views/SiteViewers/home-page.php";
    }
}