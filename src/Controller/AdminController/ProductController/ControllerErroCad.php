<?php

namespace Src\System\Controller\AdminController\ProductController;


use Src\System\Controller\Controller;
use Src\System\Repository\ProductRepository;

class ControllerErroCad implements Controller{

    public function __construct(private ProductRepository $productRepository){

    }

    public function processaRequisicao(){
        require_once __DIR__ . "/../../../../Views/Errors/ErrorAdd.php";
    }

    
}