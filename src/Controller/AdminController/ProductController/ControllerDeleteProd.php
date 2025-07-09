<?php

namespace Src\System\Controller\AdminController\ProductController;
use Src\System\Controller\Controller;
use Src\System\Repository\ProductRepository;

class ControllerDeleteProd implements Controller{

    public function __construct(private ProductRepository $productRepository){

    }

    public function processaRequisicao(){
        $id = filter_input(INPUT_GET, 'id_prod', FILTER_VALIDATE_INT);
        $this->productRepository->deletaProduto($id);
        header('Location: list-product-admin');
    }
}